<script>
  // Interface code for communication
  var Comm = {
    apiuri: '<?php echo $GLOBALS['dirpre']; ?>../hubs/api.php',
    setup: function (id, pass) {

    },
    parse: function (json) {
      // Parse based on the following format (2 lines):
      // MESSAGENAME
      // JSONDATA

      json = JSON.parse(json);
      var status = json.status,
          data = json.data,
          message = json.message;
      return {
        status: status,
        data: data,
        message: message
      };
    },
    emit: function (name, data, callback) {
      // Send message via post

      data['hub'] = thishub;
      var json = {
        name: name,
        json: data
      };
      var c = this;
      $.post(this.apiuri, json, function (data) {
        console.log('received data:', data);
        data = c.parse(data);

        var err = null;
        if (data.status == 'fail') err = data.message;
        data = data.data;

        callback(err, data);
      });
    },
    retrieve: function (type, id, callback) {
      // Retrieve a doc

      switch (type) {
        case 'hub':
          this.emit('load hub info', { hub: id }, function(err, data) {
            if (err) { alert(err); return; }

            Views.render('hub', data, false, function () {
              // Load posts
              Comm.emit('load posts tab', {}, function (err, data) {
                if (err) { alert(err); return; }

                Posts.load(data);

                afterRender();
                console.log('posts: ', data);
              });
              // Load events
              Comm.emit('load events tab', {}, function (err, data) {
                if (err) { alert(err); return; }

                data.forEach(function (meetup) {
                  Meetups.add({
                    id: meetup.id,
                    name: meetup.title,
                    datetime: meetup.starttime + ' - ' + meetup.endtime,
                    place: meetup.location + '<br />' + meetup.address,
                    going: meetup.going.length,
                    comments: meetup.comments.length,
                  });
                });

                afterRender();
                console.log('events: ', data);
              });
              // Load members
              Comm.emit('load members tab', {}, function (err, data) {
                if (err) { alert(err); return; }

                data.forEach(function (student) {
                  Members.add({
                    name: student.name,
                    pic: student.pic,
                    school: student.school,
                    joined: student.joined
                  });
                });

                afterRender();
                console.log('members: ', data);
              });
            });

            callback();
          });
          break;

        case 'meetup':
          this.emit('load event info', { event: id }, function (err, data) {
            if (err) { alert(err); return; }

            Views.render('meetup', {
              banner: '<?php echo $GLOBALS['dirpre']; ?>../app/assets/gfx/why3.jpg',
              name: data.title,
              hub: thishubname,
              datetime: data.starttime + ' - ' + data.endtime,
              place: data.location + '<br />' + data.address,
              host: data.hostname,
              hostpic: data.hostphoto,
              description: data.description,
              id: id,
              iscreator: data.iscreator,
              isgoing: data.isgoing
            }, false, function () {
              // Load comments
              Comm.emit('load event comments', { event: id }, function (err, data) {
                if (err) { alert(err); return; }

                Posts.load(data);

                afterRender();
                console.log('comments: ', data);
              });
              // Load going
              Comm.emit('list going', { event: id }, function (err, data) {
                if (err) { alert(err); return; }

                data.forEach(function (student) {
                  Members.add({
                    name: student.name,
                    pic: student.pic,
                    school: student.school,
                    joined: student.joined
                  });
                });

                afterRender();
                console.log('going: ', data);
              });

              callback();
            });
          });
          break;
      }
    },
    afterRender: function () {
      // This is where all code to setup interactive communication goes

      // Hubs stuff

      $('.joinhub').off('click').click(function () {
        Comm.emit('join hub', {}, function (err, data) {
          if (err) { alert(err); return; }

          $('#joinpanel').remove();
        });
      });

      // Posts

      $('.reply form').off('submit').submit(function() {
        var json = formJSON(this),
            content = json.text,
            parentid = $(this).parents('.thread').attr('for');
        console.log(parentid);

        var emitdata = {
          content: content,
          parentid: parentid
        };
        if ($('meetupview').length > 0)
          emitdata.event = $('meetupview').attr('for');

        Comm.emit('new post', emitdata, function (err, data) {
          if (err) { alert(err); return; }

          Posts.add('recent', {
            id: data.id,
            pic: data.pic,
            text: data.content,
            name: data.name,
            hub: thishubname,
            time: data.date,
            likes: data.likes.length,
            replies: data.children.length,
            liked: data.liked
          }, data.parent);

          afterRender();
        });

        $(this).find('textarea').val('');
        $('html').click();

        return false;
      });

      // Liking
      $('likes').off('click').click(function(event) {
        var postid = $(this).parents('.post').attr('index'),
            likes = parseInt($(this).html()),
            elikes = this;

        Comm.emit('click like', {
          postid: postid
        }, function (err, data) {
          if (err) { alert(err); return; }

          if (data == 'liked') $(elikes).html(likes + 1).addClass('liked');
          else $(elikes).html(likes - 1).removeClass('liked');
        });

        event.stopPropagation();
      });

      // Meetups

      $('.tabframe[name=createmeetup] form').off('submit').submit(function() {
        var json = formJSON(this);
        console.log('creating event: ', json);

        var form = this;

        Comm.emit('create event', {
          eventtitle: json.title,
          starttime: json.startdate + ' ' + json.starttime,
          endtime: json.enddate + ' ' + json.endtime,
          locationname: json.locationname,
          address: json.address,
          description: json.description
        }, function (err, data) {
          if (err) { $(form).children('notice').html(err); return; }

          Meetups.add({
            id: data.id,
            name: data.title,
            datetime: data.starttime + ' - ' + data.endtime,
            // 'Sunday Apr 19, 9:00 AM - Friday May 1, 6:00 PM'
            place: data.location + '<br />' + data.address,
            // 'Union Bank<br />1675 Post Street, San Francisco, CA',
            going: data.going.length,
            comments: data.comments.length
          });

          afterRender();

          $('tab[for=meetups]').click();
        });

        return false;
      });

      // Meetup view switching

      $('.meetup button').off("click").click(function () {
        var eventid = $(this).parent().attr('for');

        Comm.retrieve('meetup', eventid, function () {});
      });
      $('meetupview .details hub').off("click").click(function () {
        Comm.retrieve('hub', thishub, function () {});
      });
    }
  };
</script>