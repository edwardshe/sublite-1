<?php
	class Schools {
		public $LUT = array(
			"yale.edu" => "Yale University",
			"nyu.edu" => "New York University",
			"columbia.edu" => "Columbia University",
			"harvard.edu" => "Harvard University",
			"college.harvard.edu" => "Harvard College",
			"lawmail.usc.edu" => "University of Southern California - Law School",
			"umaryland.edu" => "University of Maryland",
			"law.umaryland.edu" => "University of Maryland - Law School",
			"mit.edu" => "Massachusetts Institute of Technology",
			"cornell.edu" => "Cornell University",
			"usc.edu" => "University of Southern California",
			"upenn.edu" => "University of Pennsylvania",
			"wharton.upenn.edu" => "University of Pennsylvania - Wharton Business School",
			"law.upenn.edu" => "University of Pennsylvania - Law School",
			"princeton.edu" => "Princeton University",
			"fas.harvard.edu" => "Harvard University - Faculty of Arts and Sciences",
			"post.harvard.edu" => "Harvard University - Alumni",
			"brynmawr.edu" => "Bryn Mawr College",
			"lawnet.ucla.edu" => "University of California Los Angeles - Law School",
			"ucla.edu" => "University of California Los Angeles",
			"student.american.edu" => "American University",
			"mail.chapman.edu" => "Chapman University",
			"husky.neu.edu" => "Northeastern University",
			"jd15.law.harvard.edu" => "Harvard University - Law School Class of 2015",
			"jd16.law.harvard.edu" => "Harvard University - Law School Class of 2016",
			"bc.edu" => "Boston College",
			"mail.usf.edu" => "University of South Florida",
			"tepper.cmu.edu" => "Carnegie Mellon - Tepper School of Business",
			"rhsmith.umd.edu" => "University of Maryland - Robert H. Smith School of Business",
			"brooklaw.edu" => "Brooklyn Law School",
			"law.georgetown.edu" => "Georgeown Law",
			"aya.yale.edu" => "Yale University - Alumni",
			"psu.edu" => "Penn State",
			"utah.edu" => "University of Utah",
			"mail.ccsf.edu" => "City College of San Francisco",
			"stern.nyu.edu" => "New York University - Stern School of Business",
			"gsb.columbia.edu" => "Columbia University Business School",
			"tufts.edu" => "Tufts University",
			"bu.edu" => "Boston University",
			"anderson.ucla.edu" => "University of California Los Angeles - Anderson School of Management",
			"temple.edu" => "Temple University",
			"hi.edu" => "Hollywood Institute",
			"carleton.edu" => "Carleton College",
			"umbc.edu" => "University of Maryland - Baltimore County",
			"neo.tamu.edu" => "Texas A&M University",
			"umich.edu" => "University of Michigan",
			"drexel.edu" => "Drexel University",
			"ehl.edu" => "Ecole Hoteliere Lausanne",
			"medicine.nevada.edu" => "University of Nevada - School of Medicine",
			"rpi.edu" => "Rensselaer Polytechnic Institute",
			"gc.cuny.edu" => "City University of New York - The Graduate Center",
			"stanford.edu" => "Stanford University",
			"emory.edu" => "Emory University",
			"cs.stanford.edu" => "Stanford University Engineering - Computer Science",
			"berkeley.edu" => "University of California Berkeley",
			"njit.edu" => "New Jersey Institute of Technology",
			"sas.upenn.edu" => "University of Pennsylvania - School of Arts & Sciences",
			"nd.edu" => "University of Notre Dame",
			"mail.usciences.edu" => "University of the Sciences",
			"law.columbia.edu" => "Columbia University Law School",
			"seas.upenn.edu" => "University of Pennsylvania - School of Engineering and Applied Science",
			"wesleyan.edu" => "Wesleyan University",
			"wustl.edu" => "Washington University in St. Louis",
			"hms.harvard.edu" => "Harvard University Medical School",
			"nursing.upenn.edu" => "University of Pennsylvania - School of Nursing",
			"vanderbilt.edu" => "Vanderbilt University",
			"uchicago.edu" => "University of Chicago",
			"dartmouth.edu" => "Dartmouth College",
			"wellesley.edu" => "Wellesley College",
			"alumni.law.upenn.edu" => "University of Pennsylvania - Law School Alumni",
			"ufl.edu" => "University of Florida",
			"alumni.brown.edu" => "Brown University - Alumni",
			"u.northwestern.edu" => "Northwestern University",
			"bucknell.edu" => "Bucknell University",
			"vet.upenn.edu" => "University of Pennsylvania - Veterinary School",
			"mail.harvard.edu" => "Harvard University",
			"student.gsu.edu" => "Georgia State University",
			"swarthmore.edu" => "Swarthmore College",
			"indiana.edu" => "Indiana University",
			"emerson.edu" => "Emerson College",
			"cs.columbia.edu" => "Columbia University - Department of Computer Science",
			"csu.fullerton.edu" => "California State University Fullerton",
			"g.harvard.edu" => "Harvard University",
			"ucl.ac.uk" => "University College London",
			"tigermail.cuny.edu" => "City College of New York",
			"georgetown.edu" => "Georgetown University",
			"cvm.tamu.edu" => "Texas A&M University - Veterinary Medicine & Biomedical Sciences",
			"ku.edu.tr" => "Koc Üniversitesi",// Here
			"virginia.edu" => "University of Virginia",
			"utexas.edu" => "University of Texas at Austin",
			"pepperdine.edu" => "Pepperdine University",
			"illinois.edu" => "University of Illinois at Urbana-Champaign",
			"umiami.edu" => "University of Miami",
			"brown.edu" => "Brown University",
			"wooster.edu" => "The College of Wooster",
			"pride.hofstra.edu" => "Hofstra University",
			"hofstra.edu" => "Hofstra University",
			"hamilton.edu" => "Hamilton College",
			"mtholyoke.edu" => "Mount Holyoke College",
			"ithaca.edu" => "Ithaca College",
			"syr.edu" => "Syracuse University",
			"rutgers.edu" => "Rutgers University",
			"business.rutgers.edu" => "Rutgers Business School",
			"gwmail.gwu.edu" => "The George Washington University",
			"austincollege.edu" => "Austin College",
			"uiowa.edu" => "The University of Iowa",
			"uga.edu" => "University of Georgia",
			"barnard.edu" => "Barnard College",
			"albany.edu" => "University at Albany",
			"uw.edu" => "University of Washington",
			"juilliard.edu" => "Julliard",
			"risd.edu" => "Rhode Island School of Design",
			"usma.edu" => "United States Military Academy",
			"bowdoin.edu" => "Bowdoin",
			"knights.ucf.edu" => "University of Central Florida",
			"ncsu.edu" => "North Carolina State University",
			"gmu.edu" => "George Mason University",
			"my.fsu.edu" => "Florida State University",
			"law.utexas.edu" => "University of Texas at Austin - School of Law",
			"villanova.edu" => "Villanova University",
			"email.unc.edu" => "The University of North Carolina at Chapel Hill",
			"mail.missouri.edu" => "University of Missouri",
			"nlaw.northwestern.edu" => "Northwestern Law",
			"abc.edu" => "Appalachian Bible College",
			"pitt.edu" => "University of Pittsburgh",
			"nscc.ca" => "Nova Scotia Community College",
			"nus.edu.sg" => "National University of Singapore",
			"hunter.cuny.edu" => "Hunter College",
			"stonybrook.edu" => "Stony Brook University",
			"live.unc.edu" => "The University of North Carolina at Chapel Hill",
			"duke.edu" => "Duke University",
			"loyola.edu" => "Loyola University Maryland",
			"gatech.edu" => "Georgia Institute of Technology",
			"my.liu.edu" => "Long Island University",
			"hacettepe.edu.tr" => "Hacettepe Universitesi",
			"andrew.cmu.edu" => "Carnegie Mellon University",
			"mail.med.upenn.edu" => "University of Pennsylvania - Perelman School of Medicine",
			"dental.upenn.edu" => "University of Pennsylvania - Dental School",
			"caltech.edu" => "California Institute of Technology",
			"skidmore.edu" => "Skidmore College",
			"jhu.edu" => "John Hopkins University",
			"davidson.edu" => "Davidson College",
			"stlawu.edu" => "St. Lawrence University",
			"conncoll.edu" => "Connecticut College",
			"colorado.edu" => "University of Colorado Boulder",
			"crimson.ua.edu" => "University of Alabama",
			"baylor.edu" => "Baylor University",
			"simons-rock.edu" => "Bard College at Simon's Rock",
			"g.ucla.edu" => "University of California Los Angeles",
			"jd14.law.harvard.edu" => "Harvard University - Law School Class of 2014",
			"eagles.nccu.edu" => "North Carolina Central University",
			"exeter.edu" => "Phillips Exeter Academy",
			"terpmail.umd.edu" => "University of Maryland",
			"gwu.edu" => "The George Washington University",
			"scrippscollege.edu" => "Scripps College",
			"go.olemiss.edu" => "The University of Mississippi",
			"eastern.edu" => "Eastern University",
			"vassar.edu" => "Vassar College",
			"uh.edu" => "University of Houston",
			"sloan.mit.edu" => "MIT Sloan School of Management",
			"student.fitchburgstate.edu" => "Fitchburg State University",
			"buffalo.edu" => "University of Buffalo",
			"cs.cmu.edu" => "Carnegie Mellon University School of Computer Science",
			"ucdavis.edu" => "University of California Davis",
			"asu.edu" => "Arizona State University",
			"students.pitzer.edu" => "Pitzer College",
			"cs.umass.edu" => "University of Massachusetts School of Computer Science",
			"umail.ucsb.edu" => "University of California Santa Barbara",
			"dukes.jmu.edu" => "James Madison University",
			"newschool.edu" => "The New School",
			"rit.edu" => "Rochester Institute of Technology",
			"wagner.edu" => "Wagner College",
			"stolaf.edu" => "St. Olaf College",
			"smith.edu" => "Smith College",
			"purdue.edu" => "Purdue University",
			"wisc.edu" => "University of Wisconsin - Madison",
			"u.rochester.edu" => "University of Rochester",
			"uoregon.edu" => "University of Oregon",
			"vt.edu" => "Virginia Tech",
			"lehigh.edu" => "Lehigh University",
			"fitnyc.edu" => "Fashion Institute of Technology",
			"bard.edu" => "Bard College",
			"utdallas.edu" => "The University of Texas at Dallas",
			"cmu.edu" => "Carnegie Mellon University",
			"uci.edu" => "University of California Irvine",
			"case.edu" => "Case Western Reserve University",
			"ucsd.edu" => "University of California San Diego",
			"umass.edu" => "University of Massachusetts Amherst",
			"uic.edu" => "University of Illinois at Chicago",
			"oberlin.edu" => "Oberlin College",
			"mba.berkeley.edu" => "University of California Berkeley - Haas School of Business",
			"cs.wisc.edu" => "University of Wisconsin-Madison - Department of Computer Science",
			"depauw.edu" => "DePauw University",
			"calpoly.edu" => "Cal Poly",
			"middlebury.edu" => "Middlebury College",
			"miamioh.edu" => "Miami University",
			"pratt.edu" => "Pratt Institute",
			"davidson.edu" => "Davidson College",
			"ripon.edu" => "Ripon College",
			"ucmerced.edu" => "University of California Merced",
			"ut.edu" => "The University of Tampa",
			"alumni.nd.edu" => "University of Notre Dame Alumni",
			"sva.edu" => "School of Visual Arts",
			"mail.wlu.edu" => "Washington and Lee University",
			"uark.edu" => "University of Arkansas",
			"gettysburg.edu" => "Gettysburg College",
			"upr.edu" => "Universidad de Puerto Rico",
			"hawk.iit.edu" => "Illinois Institute of Technology",
			"baruchmail.cuny.edu" => "Baruch College",
			"utdallas.edu" => "The University of Texas at Dallas",
			"oswego.edu" => "SUNY Oswego",
			"smu.edu" => "Southern Methodist University",
			"cs.toronto.edu" => "University of Toronto Department of Computer Science",
			"cs.washington.edu" => "University of Washington Computer Science & Engineering",
			"coloradocollege.edu" => "Colorado College",
			"american.edu" => "American University",
			"st-andrews.ac.uk" => "University of St Andrews",
			"uwaterloo.ca" => "University of Waterloo",
			"uab.cat" => "Universitat Autonoma de Barcelona",
			"himh.de" => "Hochschule für Internationales Business in Heidelberg",
			"alumnos.upm.es" => "Universidad Politecnica de Madrid",
			"upm.es" => "Universidad Politecnica de Madrid",
			"student.tudelft.nl" => "Delft University of Technology",
			"unicatt.it" => "Universita Cattolica del Sacro Cuote",
			"cam.ac.uk" => "Cambridge University",
			"post.bgu.ac.il" => "Ben-Gurion University of the Negev",
			"du.edu" => "University of Denver",
			"fau.edu" => "Florida Atlantic University",
			"goddard.edu" => "Goddard College",
			"binghamton.edu" => "Binghamton University",
			"olivet.edu" => "Olivet Nazarene University",
			"utk.edu" => "The University of Tennessee of Knoxville",
			"pace.edu" => "Pace University",
			"m.marywood.edu" => "Marywood University",
			"cmc.edu" => "Claremont McKenna College",
			"spsu.edu" => "Southern Polytechnic State University",
			"nau.edu" => "Northern Arizona University",
			"uwosh.edu" => "University of Wisconsin Oshkosh",
			"allegheny.edu" => "Allegheny College",
			"llm14.law.harvard.edu" => "Harvard Unversity Law School",
			"amherst.edu" => "Amherst College",
			"yorkmail.cuny.edu" => "The City University of New York",
			"clarku.edu" => "Clark University",
			"appstate.edu" => "Appalachian State University",
			"lsu.edu" => "Louisiana State University",
			"aucegypt.edu" => "The American University in Cairo",
			"georgiasouthern.edu" => "Georgia Southern University",
			"ksu.edu" => "Kansas State University",
			"umd.edu" => "University of Maryland",
			"cooper.edu" => "The Cooper Union",
			"msu.edu" => "Michigan State University",
			"osu.edu" => "Ohio State University",
			"colgate.edu" => "Colgate University",
			"babson.edu" => "Babson College",
			"owu.edu" => "Ohio Wesleyan University",
			"uncc.edu" => "UNC Charlotte",
			"wfu.edu" => "Wake Forest University",
			"suffolk.edu" => "Suffolk University",
			"lafayette.edu" => "Lafayette University",
			"uww.edu" => "University of Wisconsin Whitewater",
			"geneseo.edu" => "SUNY Geneseo",
			"gsd.harvard.edu" => "Harvard University Graduate School of Design",
			"eden.rutgers.edu" => "Rutgers University",
			"luc.edu" => "Loyola University Chicago",
			"law.fordham.edu" => "Fordham University School of Law",
			"rohan.sdsu.edu" => "San Diego State University",
			"student.mahidol.edu" => "Mahidol University",
			"gordonconwell.edu" => "Gordon Conwell Theological Seminary",
			"tamu.edu" => "Texas A&M University",
			"smsu.edu" => "Southwest Minnesota State University",
			"trincoll.edu" => "Trinity College",
			"scu.edu" => "Santa Clara University",
			"jd17.law.harvard.edu" => "Harvard University Law School Class of 2017",
			"design.upenn.edu" => "University of Pennsylvania School of Design",
			"ttu.edu" => "Texas Tech University",
			"alumni.upenn.edu" => "University of Pennsylvania Alumni",
			"my.uri.edu" => "The University of Rhode Island",
			"saic.edu" => "School fo the Art Institute of Chicago",
			"rollins.edu" => "Rollins College",
			"email.arizona.edu" => "The University of Arizona",
			"jefferson.edu" => "Thomas Jefferson University",
			"mytu.tuskegee.edu" => "Tuskegee University",
			"email.wm.edu" => "William & Mary",
			"mason.wm.edu" => "William & Mary Mason School of Business",
			"stwing.upenn.edu" => "University of Pennsylvania Science and Technology Wing",
			"g.cofc.edu" => "College of Charleston",
			"student.uml.edu" => "Universite Multiculturelle Internationale",
			"kent.edu" => "Kent State University",
			"unca.edu" => "University of North Carolina Asheville",
			"rams.colostate.edu" => "Colorado State University",
			"udc.edu" => "University of the District of Columbia",
			"email.wsu.edu" => "Washington State University",
			"suny.oneonta.edu" => "SUNY Oneonta",
			"mu.edu" => "Marquette University",
			"jhmi.edu" => "John Hopkins Medicine",
			"ursinus.edu" => "Ursinus College",
			"vcu.edu" => "Virginia Commonwealth University",
			"ucsc.edu" => "University of California Santa Cruz",
			"students.olin.edu" => "Olin College of Engineering",
			"student.kit.edu" => "Karlsruhe Institute of Technology",
			"harcum.edu" => "Harcum College",
			"bryant.edu" => "Bryant University",
			"madisoncollege.edu" => "Madison College",
			"zagmail.gonzaga.edu" => "Gonzaga University",
			"pointpark.edu" => "Point Park University",
			"artist.uncsa.edu" => "University of North Carolina School of the Arts",
			"union.edu" => "Union College",
			"bison.howard.edu" => "Howard University",
			"student.touro.edu" => "Touro College",
			"scmail.spelman.edu" => "Spelman College",
			"mx.lakeforest.edu" => "Lake Forest College",
			"macalester.edu" => "Macalester College",
			"email.sc.edu" => "Univeristy of South Carolina",
			"unsw.edu" => "The University of New South Wales Australia",
			"tigermail.morehouse.edu" => "Morehouse College",
			"fandm.edu" => "Franklin & Marshall College",
			"global.thunderbird.edu" => "Thunderbird School of Global Management",
			"pcc.edu" => "Portland Community College",
			"hawkmail.newpaltz.edu" => "SUNY New Paltz",
			"aggies.ncat.edu" => "North Carolina A&T State University",
			"txstate.edu" => "Texas State University",
			"mba2016.hbs.edu" => "Harvard Business School Class of 2016",
			"hsph.harvard.edu" => "Harvard School of Public Health",
			"my.mwsu.edu" => "Midwestern State University",
			"scarletmail.rutgers.edu" => "Rutgers University",
			"ku.edu" => "The University of Kansas",
			"mnsu.edu" => "Minnesota State University Mankato",
			"hks16.harvard.edu" => "Harvard Kennedy School Class of 2016",
			"mail.uc.edu" => "University of Cincinnati",
			"artic.edu" => "Art Institute of Chicago",
			"cs.utexas.edu" => "The University of Texas at Austin Computer Science",
			"iupui.edu" => "Indiana Univeristy - Purdue University Indianapolis",
			"warren-wilson.edu" => "Warren Wilson College",
			"hampshire.edu" => "Hampshire College",
			"wpi.edu" => "Worcester Polytechnic Institute",
			"bennington.edu" => "Bennington College",
			"ischool.berkeley.edu" => "UC Berkeley School of Information",
			"siena.edu" => "Siena College",
			"ngu.edu" => "North Greenville University",
			"uvm.edu" => "The University of Vermont",
			"cs.ucla.edu" => "UCLA Engineering Computer Science",
			"london.edu" => "London Business School",
			"hks.harvard.edu" => "Harvard Kennedy School",
			"hws.edu" => "Hobart and William Smith College",
			"mba2015.hbs.edu" => "Harvard Business School Class of 2015",
			"uwplatt.edu" => "University of Wisconsin Platteville",
			"essec.edu" => "Essec Business School",
			"cam.upv.es" => "Universitat Politecnica de Valencia",
			"student.ru.nl" => "Radboud University Nijmegen in the Netherlands",
			"mail.mcgill.ca" => "McGill University",
			"alumnos.uc3m.es" => "Universidad Carlos III de Madrid",
			"student.rug.nl" => "Rijksuniversiteit Groningen",
			"student.tudelft.nl" => "TU Delft",
			"students.mimuw.edu.pl" => "MIM UW",
			"sfu.ca" => "Simon Fraser University",
			"student.pravo.hr" => "University of Zagreb Faculty of Law",
			"mail.utoronto.ca" => "University of Toronto"
		);
		public function getDomain($email) {
			$ea = explode('@', $email);
			return array_pop($ea);
		}
		public function verify($email) {
			$ext = ($this->getExtension($email) == 'edu');
			$domain = array_key_exists($this->getDomain($email), $this->LUT);
			return ($ext or $domain);
		}
		public function getExtension($email) {
			$ea = $this->getDomain($email);
			$ed = explode('.', $ea);
			return array_pop($ed);
		}
		public function hasSchoolOf($email) {
			$domain = $this->getDomain($email);
			return isset($this->LUT[$domain]);
		}
		public function nameOf($email) {
			$domain = $this->getDomain($email);
			if (isset($this->LUT[$domain])) {
				return $this->LUT[$domain];
			} else {
				$ed = explode('.', $this->getDomain($email));
				array_pop($ed);
				$ed = array_reverse($ed);
				$name = ucwords(implode(' ', $ed));
				return $name;
			}
		}
	}
	$S = new Schools();
?>