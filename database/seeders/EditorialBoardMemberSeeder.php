<?php

namespace Database\Seeders;

use App\Models\JournalBoardMember;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EditorialBoardMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JournalBoardMember::insert([
            [
                "name" => "Kayode Nelson Adeniji",
                "affliation" => "Department of Integrated Coastal Science at East Carolina University (ECU)",
                "country" => "United States",
                "image" => "board-member-image/ijerm/08.png",
                "biography" => " <p>Kayode Nelson Adeniji is a Ph.D. student in the Department of Integrated Coastal Science at East Carolina University (ECU], NC.research interests lie at the intersection of hurricanes and flood disaster management, exploring novel approaches for mitigatingimpacts of disasters. Specifically, he is interested in household recovery and non-structural mitigation strategies such as propacquisition encompassing community-driven initiatives, policy interventions, and effective risk deduction. Nelson earned his mastdegree in geography at ECU, where he also served as a research assistant researching the dynamics of compound flooding in Eastern NCarolina.</p>",
                'order_id' => null ,'journal_id' => 1
            ],
            [
                "name" => "Galina Kedrova",
                "affliation" => "Center for New Information Technologies in Humanitarian Education, Lomonosov Moscow State University",
                "country" => "Russia",
                "image" => "board-member-image/ijerm/09.png",
                "biography" => "<p>Dr. Galina Kedrova graduated from the Department of Theoretical and Applied Linguistics, Faculty of Philology, Lomonosov Moscow State University (LMSU). Her main areas of interest are Digital Humanities, ICT in education, computer-assisted Russian language learning, phonetics, articulation, MRI in philological research, and the basis of articulation. As the Director of the Center for New Technologies in the Humanities, she is responsible for training faculty and postdoctoral students in the best practices of using digital scholarly resources in research and teaching and for organizing and conducting focused training programs in this area.",
                'order_id' => null ,'journal_id' => 1
            ],
            [
                "name" => "Alessio Ishizaka",
                "affliation" => "Information Systems, Supply Chain Management & Decision Support,  Neoma Business School",
                "country" => "France",
                "image" => "board-member-image/ijerm/10.png",
                "biography" => "<p>Alessio Ishizaka is a Distinguished Professor in Decision Analysis. He was Head of the Information Systems, Supply Chain and Decision making Department from 2019 to 2022. He was also the research lead and Deputy Director of the Centre of Operational Research and Logistics at the University of Portsmouth. Alessio received his PhD from the University of Basel (Switzerland). He worked successively for the University of Exeter (UK], University of York (UK], and Audencia Grande Ecole de Management Nantes (France). He has been a visiting professor in several universities in Italy, France, and Germany. His research is in the area of decision analysis, where he has published more than 120 papers. He is regularly involved in large European-funded projects. He has been the chair, co-organizer, and guest speaker of several conferences on this topic. He wrote the indispensable textbook Multicriteria Decision Analysis: methods and software.</p>",
                'order_id' => null ,'journal_id' => 1
            ],
            [
                "name" => "Caroline Cox",
                "affliation" => "School of Law, University of Portsmouth",
                "country" => "United Kingdom",
                "image" => "board-member-image/ijerm/12.png",
                "biography" => "<p>Dr. Caroline Cox is an Associate Professor specializing in Wildlife Law & Policy at the University of Portsmouth. As the lead researcher of the Ivory Project, initiated in November 2015, Dr. Cox has been instrumental in analyzing the illegal ivory trade both in the U.K. and internationally. Her research extends to various aspects of illegal wildlife trade, addressing issues such as pangolin trafficking and rhino poaching.</p><p>In collaboration with Dr. Nick Pamment, Dr. Cox launched The Ivory Project at the House of Commons in November 2015. This groundbreaking project focused on investigating the sale of ivory by the British antiques trade and lasted for 18 months. The culmination of their efforts was the release of a comprehensive report titled 'The Elephant in the Sale Room.'</p> <p>Dr. Cox's impactful report played a crucial role in the British Government's Impact Assessment, influencing changes in the law related to ivory sales in the U.K. The Ivory Act 2018, enacted on December 18, 2018, reflected the significant contributions of the Ivory Project team.Over the years, the Ivory Project has expanded its scope, fostering collaborations with partners in the U.K. and abroad. Ongoing projects include the investigation of illegal wildlife trade products online and promoting cross-jurisdictional cooperation in Range States</p><p> She is currently part of the teaching teams for the following undergraduate units: Wildlife Crime: Threats and Responses; Equity and Trusts; The Law of Succession; Trans-national Gang Crime; Environmental Law and The Legal Project.</p>",
                'order_id' => null ,'journal_id' => 1
            ],
            [
                "name" => "Constantine Dimoulas",
                "affliation" => "Department of Social Policy, Panteion University of Social and Political Sciences, Athens",
                "country" => "Greece",
                "image" => "board-member-image/ijerm/15.png",
                "biography" => "<p> Constantine Dimoulas is a Professor at Panteion University of Social and Political Sciences- ATHENS(GREECE). From 2020-2022, he was the Scientific Director of the Panteion Center for Training and Lifelong Learning. Previously to his Academic career, he worked ( 1993-2010) as a researcher and scientific coordinator in the Labor Institute of General Confederation of Greek Workers (INE/GSEE) in the field of lifelong learning and labor market policies. From 2010-2015, parallel to his academic position he was also a researcher in the  Observatory for Economic and Social Issues(INE/GSEE).</p>",
                'order_id' => null ,'journal_id' => 1
            ],
            [
                "name" => "Ivan Krylov",
                "affliation" => "Researcher at the Faculty of Geology of Moscow State University",
                "country" => "Russia",
                "image" => "board-member-image/ijerm/14.png",
                "biography" => "<p>Dr. Ivan Krylov, born in 1996, is a dedicated researcher in Geological and Mineralogical Sciences, specializing in ore deposits and geochemistry. Graduating from the Geological Faculty of Lomonosov Moscow State University in 2019, he quickly established himself as a geologist at the Institute of Geotechnologies. Transitioning to academia, he has been contributing significantly as a researcher at the Faculty of Geology, MSU, since 2019. In 2024, he achieved the esteemed title of Candidate of Geological and Mineralogical Sciences, showcasing his commitment to advancing scientific knowledge in the field. Scientific interests: Geology of ore deposits, geochemistry, methods of studying matter, minerageny, geochemical research methods.</p>",
                'order_id' => null ,'journal_id' => 1
            ],
            [
                "name" => "Ahmadreza Mohebbi",
                "affliation" => "The University of Auckland",
                "country" => "New Zealand",
                "image" => "board-member-image/ijerm/02.png",
                "biography" => "<p>Ahmadreza Mohebbi has a Ph.D. in Education with a focus on language, culture, and society at the University of Auckland. His research interests include Cultural Linguistics, Linguistic Landscape, Teaching English as an International Language (TEIL], Materials and Curriculum Development for English Language Teaching and Learning, and Mixed methods studies. He has served as a reviewer for the Cogent Arts & humanities, Scientometrics, and Ampersand Journals. He has published several papers in international journals such as the International Journal of Multilingualism, The Reading Matrix, TESL-EJ, and Ampersand.</p>",
                'order_id' => null ,'journal_id' => 1
            ],
            [
                "name" => "Michael Lynch",
                "affliation" => "Moray House School of Education and Sport, IETL, University of Edinburgh",
                "country" => "United Kingdom",
                "image" => "board-member-image/ijerm/11.png",
                "biography" => "<p>Dr. Michael Lynch is a seasoned educator with over four decades of experience in the field. I spent 11 years as a teacher and principal teacher of Modern Languages, followed by 29 years as a teacher educator, including 18 years as a senior lecturer in language studies at the University of Edinburgh. Throughout his career, he has held numerous senior leadership roles at the Moray House School of Education and Sport (MHSES], including Programme Director and Academic Coordinator.</p><p>Dr. Lynch is also deeply involved in research endeavors. His work on projects like the ERASMUS Plus research project 'Playing Beyond CLIL' has led to innovative approaches in language teaching and curriculum development on an international level. Additionally, his collaboration with Pitch@Palace, initiated by His Royal Highness The Duke of York and the Royal Society of Engineers, has supported engineer entrepreneurs globally, fostering economic growth and job creation.</p>",
                'order_id' => null ,'journal_id' => 1
            ],
            [
                "name" => "Atiqur Rahman Tuhin",
                "affliation" => "School of Science and Engineering, Saga University, Saga 840-8502, Japan",
                "country" => "Japan",
                "image" => "board-member-image/ijerm/01.png",
                "biography" => "",
                'order_id' => null ,'journal_id' => 1

            ],
            [
                "name" => "Effrosyni Mitsopoulou",
                "affliation" => "School of Psychology  Faculty of Medicine, Health & Life Science Swansea University, Wales ",
                "country" => "United Kingdom",
                "image" => "board-member-image/ijerm/13.png",
                "biography" => "<p>Dr. Effie Mitsopoulou holds a PhD from the University of Southampton. Currently, she serves as a full-time tutor at Swansea University, where she mentors students, lectures on Social Psychology and Research Methods, marks dissertations and assignments, and supervises final year projects. She also acts as a reviewer for the Psychology Ethics committee and serves as an Academic Integrity Officer for the Faculty of Medicine, Human and Life Sciences. Additionally, she works as a part-time lecturer at the Neapolis University of Paphos, teaching Research Methods, Statistics, and Personal Identity modules for distance master level psychology students. Previously, as a doctoral student, she served as a teaching assistant at the University of Southampton, marking assignments, delivering tutorials, and providing individual feedback to students. She was nominated for the Doctoral College Director's Award (Education) and awarded an Associate Teaching Fellowship in Higher Education (AFHEA) for her teaching contributions. Mitsopoulou also has experience as a peer reviewer for graduate journals and currently reviews submissions for various academic journals and organizations.</p> ",
                'order_id' => null ,'journal_id' => 1
            ],
            [
                "name" => "Mohammad Tarek Aziz",
                "affliation" => "Chittagong University of Engineering and Technology (CUET], Chattogram",
                "country" => "Bangladesh",
                "image" => "board-member-image/ijerm/03.png",
                "biography" => "<p> Mohammad Tarek Aziz is a Lecturer of Computer Science and Engineering at the Chittagong Institute of Engineering and Technology. His research interests are:</p><ul class='points'><li>Machine Learning</li><li>Deep Learning</li><li>Digital Image Processing</li><li>Natural Language Processing</li><li>Data Mining</li><li>Robotics</li> </ul>",
                'order_id' => null ,'journal_id' => 1
            ],
            [
                "name" => "Bashir Bello",
                "affliation" => "Department of Sociology Federal University Gusau, Zamfara State",
                "country" => "Nigeria",
                "image" => "board-member-image/ijerm/04.png",
                "biography" => "
                  <p> Dr. Bashir Bello is a senior lecturer with the Department of Sociology at  Federal University, Gusau. He has an interest in thorganization- industrial Sociology and Social Problems. </p>
                  ",
                'order_id' => null ,'journal_id' => 1
            ],
            [
                "name" => "Lanka Sandeep Raj",
                "affliation" => "Department of Mechanical Engineering, VNR Vignana Jyothi Institute of Engineering and Technology, Hyderabad, Telangana",
                "country" => "India",
                "image" => "board-member-image/ijerm/05.png",
                "biography" => "
                            <p>
                            Lanka Sandeep Raj did his Bachelors and Masters from JNTU Hyderabad. His specialization is Thermal Engineering. He has been teaching the subjects of his specialization for 8 years. Also, he is actively involved in research. The uniqueness of his research is that it proposes empirical correlations for melting and solidification in latent heat storage devices. These contribute significantly to Energy Conservation in various Industries. He is presently working as an Assistant Professor of Mechanical Engineering at VNRVJIET Hyderabad.
                            </p>
                            ",
                'order_id' => null ,'journal_id' => 1
            ],
            [
                "name" => "Sourav Kumar Purohit",
                "affliation" => "Sambalpur University Institute of Information Technology",
                "country" => "India",
                "image" => "board-member-image/ijerm/06.png",
                "biography" => "
                              <p>
                              Sourav Kumar Purohit is currently holding the position of Assistant Professor at the Sambalpur University Institute of Information Technology.
                              </p>
                              <p>
                              Sourav's research interests span a diverse range of topics. Particularly, he specializes in Time Series Forecasting, delving into the intricacies of predicting trends and patterns over time. His expertise also extends to the realms of Machine Learning and Deep Learning.
                              Sourav Kumar Purohit's dedication to both teaching and research underscores his commitment to fostering a dynamic and forward-thinking academic environment.
                              </p>
                              ",
                'order_id' => null ,'journal_id' => 1
            ],
            [
                "name" => "Valarie Sarah Opollo",
                "affliation" => "Centre for Global Health Research, Kenya Medical Research Institute (KEMRI], Kisumu",
                "country" => "Kenya",
                "image" => "board-member-image/ijerm/07.png",
                "biography" => "
                                <p>
                                Dr. Valarie Sarah Atieno Opollo, is a seasoned professional in health sciences with a diverse academic background, including a PhD from Durban University of Technology, South Africa. Currently serving as the Senior Research Scientist and Laboratory Director at KEMRI/CGHR, Kisumu, Kenya, she provides strategic leadership in HIV research. Dr. Opollo's expertise is recognized internationally, with roles as a WHO-appointed Expert and membership in various scientific bodies.
                                </p>
                                ",
                'order_id' => null ,'journal_id' => 1
            ],
            [
                "name" => "Patrick Ho-Tak Tsang",
                "affliation" => "Department of Logistics and Maritime Studies, The Hong Kong Polytechnic University",
                "country" => "Hong Kong",
                "image" => "board-member-image/ijerm/Patrick.jpg",
                "biography" => "
                                  <p>
                                  Dr. Patrick TSANG received his B.Eng., M.Phil. and Ph.D. in Industrial Engineering and Logistics Management from The Hong Kong University of Science and Technology (HKUST). Prior to joining The Hong Kong Polytechnic University, he was on the Faculty of Engineering of The Chinese University of Hong Kong (2019-2023) and College of Business of City University of Hong Kong (2018-2019). Patrick’s research interests cover operations management with applications from a broad range of fields such as logistics, supply chain management, transportation, emerging business, applied operations research and data analytics. Patrick has been teaching a wide range of undergraduate and postgraduate courses in the areas of undergraduate engineering mathematics, postgraduate transportation logistics and operations management. He is passionate in teaching and interaction with students. He was the recipient of teaching awards multiple times. He also has industry experiences from the sectors of banking, engineering, healthcare and procurement. Also, he is a certified Carbon Auditor.
                                  </p>
                                  ",
                'order_id' => null ,'journal_id' => 1
            ],
            [
                "name" => "Lilia Psalta",
                "affliation" => "American Psychological Association (APA], Association for the Treatment and Prevention of Sexual Abuse (ATSA], College of Sexual and Relationship Therapists (COSRT) and British Psychological Society (BPS)",
                "country" => "Cyprus",
                "image" => "board-member-image/ijerm/lilia-psalta.jpg",
                "biography" => "
                                    <p>
                                  Dr. Lilia Psalta is currently a course Leader at the MSc in Forensic Psychology and a lecturer at the University of Central Lancashire, Cyprus (Since 2015). She is also pursuing her 2nd PhD in Clinical Psychology at the University of Cyprus in the research are of Grief, Attachment and Life Transition. She studied Psychology in the USA, following her postgraduate studies in Cognitive Neuroscience at the University of York, UK. She is a Research Fellow at the University of Cyprus (Since 2013) and the University of Central Lancashire in the UK. She is an active member of the Cognitive Research Group of UCLan, Preston and of the Cognitive and Developmental Lab of UCLan, Cyprus.  She is research active within the area of neuroscience and psychology and participates in the design, development and analysis of experimental protocol for the study of neural and behavioral assemblies that underline emotional judgments and perception. She has long-term participation in research projects funded by national and international bodies, including the Cyprus Research Promotion Foundation (RPF) and the European Union. She has been the principal researcher and coordinator for the development of occupational health and safety policy and psychosocial risk management in Cypriot firefighters. She worked with Police Officials in Cyprus and the FBI to endorse knowledge on issues of Corruption in the law enforcement officers. Other areas of research interests are: Mental Health, Ghosting, Grief, Life Transition, and Internet offending (i.e., revenge porn. Cyber-harassment, stalking). Her recent research has examined: Internet offending; new approaches to the treatment of offenders, and the neurobiological basis of offending. With her research she is using cognitive neuropsychology and psychobiological approach, while interested in investigating psychological interventions to promote mental health and wellbeing. Her research was published in distinguished scientific journals like, Psychological Science, Perception, and Journal of Vision and she has presented her findings in various international conferences (EWIC, EPS, VSS). She is a member of various international research networks and professional bodies like the American Psychological Association (APA], the Association for the Treatment and Prevention of Sexual Abuse (ATSA], the College of Sexual and Relationship Therapists (COSRT)and the British Psychological Society (BPS).
                                    </p>
                                    ",
                'order_id' => null ,'journal_id' => 1
            ],
            [
                "name" => "Wei Zhang",
                "affliation" => "School of Architecture and Engineering, Liaocheng University, Liaocheng",
                "country" => "China",
                "image" => "board-member-image/ijerm/Wei-hang.png",
                "biography" => "
                                      <p>
                                      Dr. Wei Zhang, graduated from Shandong University of Science and Technology. He is an associate professor and a master's supervisor. His main research interests include rock burst and prevention, mining rock mechanics, and mining pressure and rock formation control. Also serving as the Deputy Secretary General of the Roof Prevention and Control Professional Committee of the China Mining Safety Society, and a member of the Impact Ground Pressure Professional Committee of the China Rock Mechanics and Engineering Society Int J Min Sci Techno/J Cent South Univ/Geo Mech Youth Editorial Board Adv Civ Eng academic editor and reviewer for over 30 SCI/EI journals. Preside over the National Natural Science Youth Fund, Shandong Natural Science Fund, and State Key Laboratory Fund.
                                      </p>
                                      ",
                'order_id' => null ,'journal_id' => 1
            ],
            [
                "name" => "Tahira Anwar Lashari",
                "affliation" => "Department of Computing, SEECS National University of Sciences and Technology (NUST], Islamabad.",
                "country" => "Pakistan",
                "image" => "board-member-image/ijerm/tahira-anwar-lashari.jpg",
                "biography" => "<p>Dr. Tahira A. Lashari did her PhD in educational psychology from Universiti  Tun  Hussein  Onn  Malaysia (UTHM) in 2015. After her PhD, she pursued her  Post‐Doctoral research at UTHM. She did her Master's in Applied Psychology from Punjab University Pakistan. She has published several international peer‐reviewed journals and conference papers. She also continues to contribute as a reviewer to several reputed journals.</p>",
                'order_id' => null ,'journal_id' => 1
            ],
            [
                "name" => "Shooq Altamimi",
                "affliation" => "Royal College of Surgeons in Ireland – Medical University of Bahrain",
                "country" => "Bahrain",
                "image" => "board-member-image/ijerm/shooq-altamimi.png",
                "biography" => "<p>Shooq Altamimi is a distinguished educator with a dynamic career that bridges academia, training, and generative artificial intelligence. Shooq's academic journey began with a Bachelor's in Education from the University of Bahrain, followed by an MA in English Language Teaching with a minor in Applied Linguistics from Coventry University in the UK, where she specialized threshold concepts, hybrid learning, instructional design, and reflective practices. Upon completing her MA, Shooq transitioned into the role of learning and development specialist, in which she provided training, support, and mentorship for in-service English language teachers. Currently, as a Lecturer in English and Curriculum Developer at the Royal College of Surgeons in Ireland – Medical University of Bahrain, Shooq continues to teach and inspire the next generation of nurses and AI professionals. She develops cutting-edge course materials, supervises student research projects, and leads workshops on AI and its applications.</p>",
                'order_id' => null ,'journal_id' => 1
            ],
            [
                "name" => "Qi Sun",
                "affliation" => "Department of Electrical Engineering and Computer Science at Cleveland State University, Cleveland",
                "country" => "United States",
                "image" => "board-member-image/ijerm/qi-sun.jpg",
                "biography" => "<p>Dr. Qi Sun earned her Ph.D. in Management Science and Engineering from Northeastern University, Shenyang, China, in 2018. Before that, she completed her M.S. in Software Engineering at Kunming University of Science and Technology and her B.S. in Information and Computing Science at Liaoning University. Her research interests include algorithms and experimental methods, logistics supply chain, operations research, game theory, and system optimization. She has had the honor of serving as a postdoctoral researcher at Shanghai Jiao Tong University, focusing on logistics supply chain system optimization</p><p>Currently, Dr. Sun is serving as a Research Assistant in the Department of Electrical Engineering and Computer Science at Cleveland State University, Cleveland, US.</p>",
                'order_id' => null ,'journal_id' => 1
            ],
            [
                "name" => "Laurence Armand French",
                "affliation" => "Professor of Justice Studies, College of Liberal Arts, University of New Hampshire Durham",
                "country" => "United States",
                "image" => "board-member-image/ijerm/laurence-armand-french.png",
                "biography" => "<p>Dr Laurence Armand French has the B.A., M.A., and Ph.D. in sociology (social disorganization/social psychology) from the University of New Hampshire, a Ph.D. in cultural psychology (educational psychology and measurement) from the University of Nebraska-Lincoln, and a M.A. in school psychology from Western New Mexico University. He pursued postdoctoral studies in “minorities and criminal justice education” at the State University of New York-Albany and completed the post-doctoral prescribing psychology program including the national exam. He is professor emeritus of psychology from Western New Mexico University; life-member and Fellow of the American Psychological Association; Fellow of the Society for the Psychological Study of Social Issues; Diplomate/Fellow of the College of Prescribing Psychologists (charter member); life-member of the American Society of Criminology; served honorably in the U.S. Marine Corps and is a life-member of the Veterans of Foreign Wars (VFW Post 2860); the Third Marine Division Association; and Disabled American Veterans (DAV). He is a licensed clinical psychologist (Arizona); a Fulbright Scholar (University of Sarajevo, Bosnia-Herzegovina – 2009-2010); and was a Visiting Endowed Chair of Criminology and Criminal Justice at St. Thomas University, Fredericton, New Brunswick, Canada (fall semester 2010). He completed a Fulbright Specialist project (#6764) on \"war crimes and missing persons,\" for the Republic of Srpska, Minister of Interior, Bosnia-Herzegovina at the Police College, University of Banja Luka, February 22 - April 3, 2016. He won a 2014 McGraw Hill Distinguished Scholar Award and the 2014 Distinguished Career Contribution to Research Award from Division 45 (Society for the Psychological Study of Culture, Ethnicity and Race) of the American Psychological Association. In 2018, he won a Marquis Who's Who Lifetime Achievement Award. He has over 300 publications including 20 books. His major areas of research interest are international and comparative social, human and criminal justice; Native American and minority issues; police and criminal psychology and neuro-, clinical, and forensic psychology.</p>",
                'order_id' => null ,'journal_id' => 1
            ],
            [
                "name" => "Yue Zhuo",
                "affliation" => "Chinese Instructor, Calvin University",
                "country" => "United States",
                "image" => "board-member-image/cli/12.png",
                "biography" => "
                        <p>
                        Dr. Zhuo grew up in Guizhou, China, and has lived abroad in the United Kingdom and the United States. As a fourth-generation teacher, she inherited the desire to pursue a career as an educator and has been working as a language instructor for over ten years. She got her doctoral degree in literacy, culture, and language at Oakland University, and now she is teaching Chinese at Calvin University.
                        </p>
                        <p>
                        As a professor, she encourages students to use language in meaningful contexts, introduces Chinese cultural literacy, and inspires students to understand Chinese culture from various perspectives.
                        As a researcher, her academic interests are English as a Second Language and Chinese as a Foreign Language pedagogical approaches, Pragmatics and strategic usages of Chinese, Chinese history, culture, and calligraphy.
                        Dr. Zhuo enjoys traveling, reading, films, and music, especially singing Chinese folk songs, but Chinese calligraphy is one of her favorite hobbies. She enjoys giving Chinese calligraphy demonstrations at cultural festivals and helping people appreciate the beauty of traditional Chinese characters.
                        </p>
                        ",
                'order_id' => null ,'journal_id' => 2
            ],
            [
                "name" => "Ahmadreza Mohebbi",
                "affliation" => "The University of Auckland",

                "country" => "New Zealand",
                "image" => "board-member-image/cli/04.png",
                "biography" => "
                <p>
                Ahmadreza Mohebbi has a Ph.D. in Education with a focus on language, culture, and society at the University of Auckland. His research interests include Cultural Linguistics, Linguistic Landscape, Teaching English as an International Language (TEIL], Materials and Curriculum Development for English Language Teaching and Learning, and Mixed methods studies. He has served as a reviewer for the Cogent Arts & humanities, Scientometrics, and Ampersand Journals. He has published several papers in international journals such as the International Journal of Multilingualism, The Reading Matrix, TESL-EJ, and Ampersand.
                </p>
                ",
                'order_id' => null ,'journal_id' => 2
            ],
            [
                "name" => "Óscar Cabral",
                "affliation" => "Faculty of Gastronomic Sciences, Mondragón University, San Sebastián",

                "country" => "Spain",
                "image" => "board-member-image/cli/08.png",
                "biography" => "
                  <p>
                  Óscar Cabral is a Portuguese granted doctoral fellow and researcher at Basque Culinary Center, Faculty of Gastronomic Sciences, Mondragón University (San Sebastián, Spain], with a public PhD grant from the Foundation for Science and Technology, Portugal. He holds a BSc in Public Administration, an MSc in Administration and Public Management, and minors in Public Policy and European Studies at the University of Aveiro, respectively. Óscar also holds a Technological Specialization Course in Culinary Arts from the Hospitality and Tourism School of Lisbon (Hons Degree).
                  </p>
                  <p>
                  Óscar used to work with public policy implementation, e-government and government relations. After a career change, Óscar worked as a gastronomic consultant, Chef instructor and consultant Executive Chef in hotels and restaurants. He also worked in gastronomic and culinary communication (MasterChef Portugal and Teleculinária).
                  </p>
                  <p>
                  Óscar researches gastronomy, cultural diplomacy, identity, gastronomy as heritage and as a touristic asset, political use of gastronomy, nation branding, food promotion, traditional foodways, food products, rituals, techniques, and culinary practices.
                  </p>
                  ",
                'order_id' => null ,'journal_id' => 2
            ],
            [
                "name" => "Luciano Micali",
                "affliation" => "Department of Philosophy, History and Art Studies, Faculty of Arts, University of Helsinki",

                "country" => "Finland",
                "image" => "board-member-image/cli/09.png",
                "biography" => "
                    <p>
                    Dr. Luciano Micali is a researcher in the field of the History of Philosophy, with a focus on late ancient and medieval philosophy. He obtained his Ph.D. degree at the University of Freiburg Breisgau (Germany) with a dissertation on Heymericus de Campo. Afterward, he carried out research activities at the Charles University of Prague and at the University of Helsinki, where he currently works. He taught courses on the History of Philosophy at the Universities of Freiburg, Prague, and Helsinki. His interests are interdisciplinary and touch upon philosophy, theology, classical and medieval philology, history, and intellectual history.
                    </p>
                    <p>
                    Luciano Micali published several scientific contributions in renowned academic journals and collective volumes. Throughout the years, he disseminated his research in international conferences and research colloquia, as well as invited lecturer in various universities and research institutions.
                    </p>
                    ",
                'order_id' => null ,'journal_id' => 2
            ],
            [
                "name" => "Dionysis Mourelatos",
                "affliation" => "Department of Archaeology and History of Art of the National and Kapodistrian University of Athens",

                "country" => "Greece",
                "image" => "board-member-image/cli/16.png",
                "biography" => "
                      <p>
                      Dr. Dionysis Mourelatos read History and Archaeology at the University of Athens. He was awarded an M.A. in Byzantine Art and Archaeology and a Phd (2009) in the same field also at the University of Athens. His PhD Thesis was entitled 'Icon: its placement and function. Developing an electronic thesaurus of terms'. Since 2009 he teaches or has taught in several universities in Greece and Cyprus. He has worked on many research projects for Vrije Universiteit Amsterdam, the University of Athens, the Ionian University, the Mount Sinai Foundation in Athens and the Monastery of Saint Catherine's at Sinai. He has written and presented several papers, mostly on art history and archaeology of Sinai and the Historiography of Byzantine Art and Archaeology. He was the editor of the volume 'Art and Archaeology in Byzantium and Beyond' (B.A.R., Oxford 2021) and the curator of the exhibition “Smyrna in the early 20th century: through the eyes of the Byzantinist Georgios Lampakis” at the Byzantine and Christian Museum in Athens (December 2022-April 2023).
                      </p>
                      ",
                'order_id' => null ,'journal_id' => 2
            ],
            [
                "name" => "Samikshya Madhukullya",
                "affliation" => "Department of Cultural Studies, Tezpur University",

                "country" => "India",
                "image" => "board-member-image/cli/01.png",
                "biography" => "
                 <p>
                 Graduating with a bachelor's degree in Architecture from Nanjing Tech University and a master's degree in Urban Environmental Design from Hong Kong Polytechnic University, Xie Jiangtao brings a solid educational background to the current role. Currently employed at Yangzhou Architectural Design and Research Institute Co., Ltd., his primary focus lies in urban studies, cultural landscapes, spatial econometrics, and related areas. Alongside his professional commitments, he has founded the XG Research Group, a research studio where he collaborates with esteemed professors from various universities.
                 </p>
                 ",
                'order_id' => null ,'journal_id' => 2
            ],
            [
                "name" => "Jiangtao Xie",
                "affliation" => "Yangzhou Architectural Design and Research Institute Co., Ltd",
                "country" => "China",
                "image" => "board-member-image/cli/02.png",
                "biography" => "",
                'order_id' => null ,'journal_id' => 2

            ],
            [
                "name" => "Mohammed Ibrahiem Hassan Mohammed",
                "affliation" => "Professor in Library and Information Dept., Faculty of Arts, Ain Shams University",
                "country" => "Egypt",
                "image" => "board-member-image/cli/14.png",
                "biography" => "Professor Mohammed Ibrahiem Hassan Mohammed is a renowned figure in Library and Information Science, currently serving as Vice Dean of Education and Students’ Affairs at Ain Shams University. With a career spanning over two decades, they've held key positions in academia, including professorships at Ain Shams University and Umm Al Qura University. Their dedication has been recognized through prestigious awards such as the 'Rightly Guided Son One who praises Al Nuaimi' prizes in Ajman, UAE, and the 'Sharjah for Librarianship Literature' prizes. Dr. Hassan Mohammed's passion for education and scholarly contributions continue to shape the field, earning them admiration and respect within the academic community.",
                'order_id' => null ,'journal_id' => 2
            ],
            [
                "name" => "Penghui Jiang",
                "affliation" => "College of Public Administration Nanjing Agriculture University",
                "country" => "China",
                "image" => "board-member-image/cli/03.png",
                "biography" => "",
                'order_id' => null ,'journal_id' => 2
            ],
            [
                "name" => "Yifan Zuo",
                "affliation" => "Department of Leisure Sports (Leisure Tourism], School of Physical Education, Shenzhen University",

                "country" => "China",
                "image" => "board-member-image/cli/05.png",
                "biography" => "
                  <p>
                  Dr. Yifan Zuo is an accomplished researcher and educator with a rich academic background and diverse professional experiences on tourism management from Jinan University, China. Dr. Zuo explored the intricacies of destination vibrancy and its impact on tourists' behavioral intentions in their doctoral research.
                  </p>
                  <p>
                  With a Master's degree in Physical Education from Shenzhen University, where the focus was on traditional sports and games, Dr. Zuo delved into the identity of digital media communication in sports intangible cultural heritage for their M.Ed. dissertation.
                  </p>
                  <p>
                  In the realm of academic publishing, Dr. Zuo has an impressive portfolio, contributing to over 30 journal articles, co-authoring a textbook, and co-editing numerous books.
                  </p>
                  ",
                'order_id' => null ,'journal_id' => 2
            ],
            [
                "name" => "Nurul Huda Hamzah",
                "affliation" => "Department of English Language, Faculty of Languages and Linguistics Universiti Malaya Kuala Lumpur",

                "country" => "Malaysia",
                "image" => "board-member-image/cli/06.png",
                "biography" => "
                    <p>
                    Nurul Huda Hamzah is a Senior Lecturer of Applied Linguistics at Universiti Malaya, Kuala Lumpur. She received her PhD at Newcastle University in the United Kingdom in 2018. As an educator, she has been teaching primarily in the Sociolinguistics area. As an administrator, she has always been enamored with the idea that international collaboration and cooperation are one of the underused tools that promote the linguistic and cultural enhancement of learners. For this reason, she has promoted international teaching exchange programs and committed a great deal of time and effort to start such programs. Her most recent interest involves investigating various ways to enhance the visibility and salience of languages on public and commercial signs around Malaysia.
                    </p>
                    ",
                'order_id' => null ,'journal_id' => 2
            ],
            [
                "name" => "Ngakan Ketut Acwin Dwijendra",
                "affliation" => "Universitas Udayana, Bali",

                "country" => "Indonesia",
                "image" => "board-member-image/cli/07.png",
                "biography" => "
                      <p>
                      Dr. Ngakan Ketut Acwin Dwijendra, a lecturer, Architect, Researcher, Author, Urban Planner, Interior Design, Landscaper, Designer, and Yoga Teacher, was born on June 3, 1971, in Bangli Bali, with expertise in architecture, design, urban planning, and yoga teaching. Holds degrees in architecture, art, and philosophy. Joined Udayana University in 1997, published 19 books, and held 56 intellectual property rights. Founder of Goldmonk Architect and Goldmonk Yoga, actively involved in professional associations, with 15 Certificates of Expertise. Completed over 60 design projects, recognized as Asia's Best Architect in 2018. An award-winning yoga teacher since 2003. Champion of Outstanding Lecturer at Udayana University in 2018.
                      </p>
                      ",
                'order_id' => null ,'journal_id' => 2
            ],
            [
                "name" => "Fengyan Wang",
                "affliation" => "School of Psychology, Nanjing Normal University, Nanjing, Jiangsu Province",

                "country" => "China",
                "image" => "board-member-image/cli/10.png",
                "biography" => "
                            <p>
                            Dr. Wang Fengyan is a Professor at the School of Psychology of Nanjing Normal University and serves as the Deputy Director of the Institute of Moral Education, which is recognized as a Key Research Base of Humanities and Social Sciences by the Ministry of Education. His primary research focuses on Chinese cultural psychology and wisdom psychology.
                            </p>
                            <p>
                            Dr. Wang is credited with pioneering the study of Chinese cultural psychology and has significantly contributed to its advancement. He authored the first domestic monograph on Chinese Cultural Psychology, enhancing its prominence and vitality within academic discourse. Additionally, he authored the inaugural research monograph on wisdom psychology in China, titled 'Theoretical Exploration and Application Research of Wisdom Psychology,' wherein he introduced the innovative concept of 'The Wisdom Theory of an Integration of Virtue and Cleverness.'
                            </p>
                            <p>
                            Throughout his career, Dr. Wang has published over 70 academic papers in internationally renowned journals dedicated to moral education research. His scholarly contributions have garnered recognition, including the prestigious third prize of the Science Research Famous Achievement Award in Higher Institution (Humanities and Social Sciences) awarded by the Ministry of Education.
                            </p>
                            ",
                'order_id' => null ,'journal_id' => 2
            ],
            [
                "name" => "Teiborlang T. Kharsyntiew",
                "affliation" => "School of International Studies, Jawaharlal Nehru University",

                "country" => "India",
                "image" => "board-member-image/cli/11.png",
                "biography" => "
                              <p>
                              Dr. Teiborlang T. Kharsyntiew is an Assistant Professor of European Studies at the School of International Studies, Jawaharlal Nehru University. Before Joining JNU, he taught in the Department of International Relations at Sikkim University, Gangtok. In 2017, he was awarded a month-long Research Stay fellowship at the Otto-Suhr-Institute of Political Sciences at Freie Universität Berlin as part of the University Grants Commission, India and the DAAD, Germany’s project on Indo-German Partnership in Higher Education. In 2022, he was awarded the EU visitor programme. Besides research on issues of European Security, his research interest includes borderland studies and India’s north-eastern region. He holds an MA in Politics from JNU, and M.Phil and Ph.D from the Centre for European Studies, JNU.
                              </p>
                              ",
                'order_id' => null ,'journal_id' => 2
            ],
            [
                "name" => "Hamid Zargham Boroujeni",
                "affliation" => "Department of Tourism Management, Allameh Tabatabai University, Tehran",

                "country" => "Iran",
                "image" => "board-member-image/cli/13.png",
                "biography" => "
                                  <p>
                                  Professor Hamid Zargham Borujeni has been a distinguished faculty member at Allameh Tabatabai University in Tehran since 1982, renowned as the 'father of scientific tourism in Iran.' He has shaped the academic program of tourism management in the country and taught courses such as 'Tourism Policy' and 'Tourism Development Planning.' With over 80 research papers and 16 textbooks to his name, Professor Borujeni's contributions to the field are extensive. He has also consulted on tourism development projects for over 30 years, earning recognition for his practical research achievements. Currently serving as the chief editor of the 'Quarterly Journal of Social Studies in Tourism' and a member of editorial boards for prominent journals, Professor Borujeni continues to influence the scholarly discourse on tourism management.
                                  </p>
                                  ",
                'order_id' => null ,'journal_id' => 2
            ],
            [
                "name" => "Paraskevi Eleftheriou",
                "affliation" => "Intercultural Education Laboratory, University of Athens",

                "country" => "Greece",
                "image" => "board-member-image/cli/17.jpg",
                "biography" => '
                                  <p>
                                  Dr Paraskevi Eleftheriou holds a Ph.D. in Pedagogy from the University of Athens. The object of her study is intercultural education, the integration policies for students with heterogeneous cultural backgrounds, and the formation of the institutional framework for the education of students with heterogeneous cultural characteristics. Currently, she collaborates with the Intercultural Education Laboratory of University of Athens. She completed postgraduate studies in the postgraduate program "Theory, Practice and Evaluation of the Educational Process" at the Philosophical School of Athens. She is a graduate of the Athens School of Philosophy and has been working as a secondary education philologist since 2010. She has participated in research projects for the Intercultural Education Laboratory of the University of Athens. Her research interests are educational research as an axis of intercultural education, critical research in relation to the institutional framework, the education of immigrants and refugees, the application of critical pedagogy, and critical discourse analysis. Based on these interests, she has published articles, presentations and chapters in collective volumes in international and domestic publications.
                                  </p>
                                  ',
                'order_id' => null ,'journal_id' => 2
            ],
            [
                "name" => "Maria Patrizia Violi",
                "affliation" => "University of Bologna",
                "country" => "Italy",
                "image" => "board-member-image/cli/18.jpg",
                "biography" => '<p>Dr. Patrizia Violi, Full Professor of Semiotics at the University of Bologna. is director of VS. Quaderni di studi semiotici, and Former Director of the International Centre for Advanced Studies in the Humanities `Umberto Eco` and of TraMe - Centro di Studi Semiotici sulle Memorie Culturali. Among other publications, Patrizia Violi is the author of Meaning and Experience (Indiana University Press, 2001], Landscapes of Memory. Trauma, Space, History, (Peter Lang, 2017). She was PI of two Marie Curie EU exchange projects on memory and trauma in Europe and Latin America.
                                  </p>
                                  ',
                'order_id' => null ,'journal_id' => 2
            ],
            [
                "name" => "Arthur Ragauskas",
                "affliation" => "University of Tennessee",
                "country" => "USA",
                "image" => "board-member-image/seer/03.png",
                "biography" => "
                 <h5>Professional Achievements:</h5>
                 <ul class='points'>
                 <li>Dr. Arthur Ragauskas held the first Fulbright Chair in Alternative Energy.</li>
                 <li>He is a Fellow of the American Association for the Advancement of Science, the International Academy of Wood Science, and TAPPI.</li>
                 </ul>
               <h5>Academic Roles:</h5>
                 <ul class='points'>
                 <li>In 2014, he assumed a Governor’s Chair for Biorefining at the University of Tennessee’s Department of Chemical and Biomolecular Engineering.</li>
                 <li>Complementary appointment in the UT Institute of Agriculture’s Department of Forestry, Wildlife, and Fisheries.</li>
                 <li>Serves in the Energy and Environmental Sciences Directorate, Biosciences Division, at ORNL.</li>
                 </ul>
              <h5>Research Focus:</h5>
                 <ul class='points'>
                 <li>Dr. Ragauskas's research program aims to understand and exploit innovative sustainable bioresources for the circular economy.</li>
                 <li>Focus on developing new applications for renewable biopolymers for biofuels, biopower, and bio-based materials and chemicals.</li>
                 </ul>
                <h5>Funding and Publications:</h5>
                 <ul class='points'>
                 <li>His research program has received sponsorship from NSF, USDA, DOE, GA Traditional Industry Program, industry consortia, and various fellowship programs.</li>
                 <li>The program's outcomes are summarized in 722 peer-reviewed publications.</li>
                 </ul>
                <h5>International Collaboration:</h5>
                 <ul class='points'>
                 <li>Fulbright-sponsored activities at the Chalmers University of Technology, Sweden, focused on forest biorefinery and new biofuel conversion technologies for lignocellulosics.</li>
                 </ul>
              <h5>Current Leadership Role:</h5>
                 <ul class='points'>
                 <li>Currently, Dr. Ragauskas manages a research group and serves as the Interim Head for the Department of Chemical and Biomolecular Engineering@UTK.</li>
                 </ul>
               <h5>Awards and Recognitions:</h5>
                 <ul class='points'>
                 <li>Recipient of prestigious awards, including the 2014 TAPPI Gunnar Nicholson Gold Medal Award, the 2014 ACS Affordable Green Chemistry Award, the 2017 AIChE Green Processing Award, the 2017 Academia Distinguished Service Award, 2019 AIChE Chase Award, and the 2022 RSC Environment, Sustainability, and Energy Division open award: Environment Prize.</li>
                 </ul>
                <h5>Student and Postdoc Achievements:</h5>
                 <ul class='points'>
                 <li>Dr. Ragauskas's students and postdocs have received several awards, including the ACS graduate research award, the ORNL UT-Battelle Award, and the ORNL Supplementary Performance Award.</li>
                 </ul>
                 ",
                'order_id' => null ,'journal_id' => 3
            ],
            [
                "name" => "Nabila Abid",
                "affliation" => "University of GAbrierle D Annuznio Chieti-Pescara",
                "country" => "Italy",
                "image" => "board-member-image/seer/11.png",
                "biography" => "
                   <p> Dr. Nabila Abid, a distinguished scholar, holds a Doctorate in Management and Business Economics from the esteemed University of Chieti and Pescara, Italy. Her academic journey spans across renowned institutions like the Technical University of Munich, Regensburg University, and Newcastle University Business School, UK, establishing her as an authority in Management, Business Economics, and Environmental Studies.
                   </p>
                   <p>
                   Her research spans diverse topics, including climate change mitigation, environmental and energy economics, natural resource management, and technological innovations.
                   </p>
                   <p>
                   Nabila has contributed significantly to academic literature, publishing in esteemed journals such as Energy Policy, Resources Policy, Business Strategy and Environment, Sustainable Development, and the Journal of Cleaner Production, etc.
                   </p>
                   ",
                'order_id' => null ,'journal_id' => 3
            ],
            [
                "name" => "Seyyed Akbar Sadaty",
                "affliation" => "slamic Azad University, Mazandaran",
                "country" => "Iran",
                "image" => "board-member-image/seer/15.png",
                "biography" => "
                     <p>
                     Prof. Seyyed Akbar Sadaty is the first strategic, multidisciplinary researcher with process (SMM) in agricultural water and soil in the world. He has about 25 years of teaching experience at Payam Noor and Islamic Azad universities in Mazandaran and Golestan provinces in Iran. His keen interest has led him to complete his PhD in Soil Resource Management - Physics and Soil Conservation, in addition to various management disciplines. He has refereed more than 350 domestic and international articles and published 48 books in the Persian language in various fields (productivity management, soil resources, economics and ...). Due to his effective and efficient work, he has been chosen as the best author and researcher of the country and the relevant province (in Iran) more than 10 times and has received awards. Dr. Seyyed Akbar Sadaty, along with cultural and research activities in various journals of the world.
                     </p>
                     ",
                'order_id' => null ,'journal_id' => 3
            ],
            [
                "name" => "Marica Mamut",
                "affliation" => "Department of Geography, University of Zadar",

                "country" => "Croatia",
                "image" => "board-member-image/seer/18.png",
                "biography" => "
                       <p>
                       Marica Mamut, a distinguished scientist, received her doctorate from the Department of Geography at the respected University of Zagreb, Croatia. She is an associate professor at the Department of Geography at the University of Zadar, Croatia. Closer scientific interest is focused on physical geography, especially geomorphology, and research on the influence of natural elements on the geo-ecological value of space. Her research topics include the consequences of climate change, environmental change, natural resource management and sustainable development.
                       </p>
                       <p>
                       As an external associate, he teaches at the Faculty of Natural Sciences, Mathematics and Educational Sciences of the University of Mostar (undergraduate, graduate, and postgraduate studies). She was a member of the expert working group for the preparation of test materials for national exams in geography and is a member of the State Commission for the Geography Competition. She wrote several scientific and professional papers in the field of physical and applied geography and participated in several international scientific meetings.
                       </p>
                       ",
                'order_id' => null ,'journal_id' => 3
            ],
            [
                "name" => "Mohammed Amer",
                "affliation" => "Department of Mechanical Engineering  College of Engineering and Technology Palestine Technical University – Kadoorie",

                "country" => "Palestine",
                "image" => "board-member-image/seer/05.png",
                "biography" => "
                     <p>
                    Mohammed Amer received the B.S. degree in Mechatronics Engineering from An-Najah National University, Palestine, in 2013, and the M.A., Ph.D. in Mechanical Science from National Chiao Tung University, Taiwan, in 2016 and 2020, respectively. Dr. Amer has served as an RD Prime Thermal Engineer at Sunonwealth Electric Machine Industry Co., Ltd. from December 2020 to February 2022. He was responsible for the new technology and roadmap of the company. He is currently an Assistant Professor in the Mechanical Engineering Department, at Palestine Technical University – Kadoorie (PTUK), Palestine. His fields of expertise include notebook cooling module improvement, electronics cooling, fan and blower, heat pipe, vapor chamber, material, coating, synthetic cooling, motor, liquid thermal solution, modeling and simulation, and others. His research areas include frosting and defrosting, plastic heat exchangers (dehumidification), nanofluids and heat transfer, PV/T solar systems, jet cooling, machines, aerodynamics, and mechatronics systems. Dr. Amer has published 16 patents and more than 40 peer-reviewed research papers over the past 5 years and reviewed over 150 papers since 2020. He is also a Review Editor for Smart Technologies, Frontiers, Switzerland.
                     </p>
                     ",
                'order_id' => null ,'journal_id' => 3
            ],
            [
                "name" => "Wuyang Hong",
                "affliation" => "Assistant Professor,  School of Architecture and Urban Planning Shenzhen University",
                "country" => "China",
                "image" => "board-member-image/seer/01.png",
                "biography" => "",
                'order_id' => null ,'journal_id' => 3
            ],
            [
                "name" => "Ghulam Sarwar Soomro",
                "affliation" => "Environmental Studies, University of Padova, Italy",
                "country" => "Italy",
                "image" => "board-member-image/seer/02.png",
                "biography" => "",
                'order_id' => null ,'journal_id' => 3
            ],
            [
                "name" => "Shi Yin",
                "affliation" => "Hebei Agricultural University, Baoding",

                "country" => "China",
                "image" => "board-member-image/seer/16.png",
                "biography" => "
                     <p>
                     Shi Yin is the deputy editor of The Journal of Hebei Agricultural University (Social Science Edition), the deputy director of MPACC Center and the Deputy Director of The Department of Management of the College of Economics and Management. He has published more than 130 papers.
                     </p>
                     <p>
                     Interests: Digital innovation management; knowledge management; energy and environmental assessment; green innovation processes; digital transformation; green manufacturing; environmental sustainability; sustainable process engineering; industrial engineering; combinatorics, algorithms, and optimization; healthcare big data; social network data analysis and mining; fuzzy rule-based systems; cognitive computational science (including innovative models and paradigms from digital humanities and quantitative and qualitative social sciences); civil engineering innovation for sustainability; green building; green building technology; digital engineering in construction; information management; smart buildings; smart cities; sustainable supply chain management.
                     </p>
                     ",
                'order_id' => null ,'journal_id' => 3
            ],
            [
                "name" => "Kulamani Parida",
                "affliation" => "Centre for Nano Science and Nano Technology, Siksha 'O' Anusandhan University, Bhubaneswar",

                "country" => "India",
                "image" => "board-member-image/seer/09.png",
                "biography" => "
                  <p>
                Currently, Dr. Parida is serving as a Professor in Chemistry and Director of the Centre for Nano Science and Nano Technology
                <br>
                Professor Parida boasts an impressive collection of 16 state and national-level scientific awards, authorship of approximately 425 research articles. Professor Parida holds an outstanding record of 35 national scientific patents.
                  </p>
                  ",
                'order_id' => null ,'journal_id' => 3
            ],
            [
                "name" => "Shifeng Wang",
                "affliation" => "Nanjing Tech University, Jiangsu Province",

                "country" => "China",
                "image" => "board-member-image/seer/04.png",
                "biography" => "
                  <p>
                  Dr. Shifeng Wang is a distinguished Professor at Nanjing Tech University, specializing in various facets of energy research. With a focus on Hydrogen Energy, Solar Energy, and Sustainable Electrical Power Systems, Dr. Wang is at the forefront of innovative research. His expertise extends to Multiscale Energy System Analysis and Modeling, contributing valuable insights to the field. Additionally, his work encompasses cutting-edge research in Energy Conversion and Storage, shaping the future of sustainable energy solutions.
                  </p>
                  ",
                'order_id' => null ,'journal_id' => 3
            ],
            [
                "name" => "Majdi M. Alomari",
                "affliation" => "Electrical Engineering Department / Australian University (AU) P.O. Box 1411, Safat - 13015",

                "country" => "Kuwait",
                "image" => "board-member-image/seer/06.png",
                "biography" => "
                  <p>
                Dr. Majdi M. Alomari has been an Associate Professor in the Electrical Engineering Department at the Australian University (AU) since 2015. He was an Assistant Professor in the Electrical Engineering Department at the Hashemite University - HU (2012-2015) and a Teaching Assistant in the Electrical Engineering Department at the University of Technology, Sydney – UTS (2009-2012). His research interests include Power System Analysis, Power System Stability and Control, Power System Planning, Power System Protection, Power Electronics, Electrical Machines and Drives, Electric Machine Design, Renewable Energy, Smart Grid, Energy Planning and Policy, Control Systems, Optimal Control, Nonlinear Dynamics, Linear System Analysis and other related topics. Dr. Alomari is a member of IEEE and the IEEE Power & Energy Society. Also, he is a Chartered Professional Engineer (CPEng) of Engineers Australia (EA)
                  </p>
                  ",
                'order_id' => null ,'journal_id' => 3
            ],
            [
                "name" => "Lei Yang",
                "affliation" => "Business School of Zhengzhou University ",

                "country" => "China",
                "image" => "board-member-image/seer/12.png",
                "biography" => "
                  <p>
                  Dr. Lei Yang is currently a Lecturer in Business and Management at the Business School of Zhengzhou University, P.R. China. Before that, she served as a Lecturer in Marketing at the School of Business and Management, Henan University of Economics and Law. She obtained her Ph.D. degree from Queen Mary University of London and a master’s degree in Business (Behavioural Science) from the University of Warwick. Her main research interests include consumer behavior, pro-environmental behavior, green marketing, and corporate social responsibility. She has participated in numerous international academic conferences in her field, such as the 34th European Group for Organizational Studies (EGOS) Colloquium, the Sustainability Development Academic Conference in Lille, France, and the British Academy of Management (BAM) Annual Conference. She serves as an anonymous reviewer for Management Review in China.
                  </p>
                  ",
                'order_id' => null ,'journal_id' => 3
            ],
            [
                "name" => "Sina Samadi Gharehveran",
                "affliation" => "University of Tabriz",

                "country" => "Iran",
                "image" => "board-member-image/seer/07.png",
                "biography" => "
                  <p>
                Sina Samadi Gharehveran received the B.S. and M.Sc. degrees in Power electrical engineering - planning and management of electrical systems from Tabriz University, Tabriz, Iran, in 2016 and 2018, respectively he is now a Ph.D. student at Tabriz University, Tabriz, Iran, from 2019 until now. His primary research is in optimization, smart grids, energy management, and power system resilience. He is currently working as a researcher in the electricity distribution organization of East Azarbaijan Province, Tabriz, Iran.
                  </p>
                  ",
                'order_id' => null ,'journal_id' => 3
            ],
            [
                "name" => "Arindam Chakraborty",
                "affliation" => "Department of Geology, Faculty of Science, University of Malaya 50603 Kuala Lumpur",

                "country" => "Malaysia",
                "image" => "board-member-image/seer/14.png",
                "biography" => "
                   <p>
                   Dr Arindam was born and raised in Kolkata (eastern part of India), and he earned his Master's in Marine Biology from Pondicherry University (India) and later got his Doctoral degree in Marine Micropalaeontology from Birbal Sahni Institute of Palaeosciences (BSIP, India). He has experience working at world-renowned laboratories of UCL (London) during his PhD. His postdoctoral experience in India as a National Postdoctoral fellow (2017-2019) and Birbal Sahni Research Associate (2019-2022) at BSIP India was to understand the Neogene climate of the northern Indian Ocean. Later on, he joined the Institute of Earth Sciences, Academia Sinica, Taiwan, as a Postdoctoral Researcher working on several environmental and climatic issues. Currently, he is working as a senior lecturer at the Department of Geology, Universiti Malaya (Malaysia), and is also the supervisor of the Geology Museum at the department.
                   </p>
                   ",
                'order_id' => null ,'journal_id' => 3
            ],
            [
                "name" => "Fatemeh Zahed",
                "affliation" => "Research Projects Manager and Scientific Member of BHRC’s Scientific Board",

                "country" => "Iran",
                "image" => "board-member-image/seer/08.png",
                "biography" => "
                  <p>
                Dr. Fatemeh Zahed received her Ph.D. degree in Environmental Engineering- Air Pollution from Tehran University, Tehran, Iran, in Feb. 2023. Her investigations have mainly focused on Waterbodies’ Quality Modeling, Atmospheric Air Pollution Management, and Indoor Air Quality (IAQ). Moreover, her expertise extends to Environmental Considerations of Energy Conservation Measures, as well as Green Building Surveys and certification. She has been working for the “Road, Housing and Urban Development Research Center (BHRC)” Since 2003 as a research projects manager and scientific member of BHRC’s Scientific board, conducting research projects on environmental issues of buildings, transportation and urban development.
                  </p>
                  ",
                'order_id' => null ,'journal_id' => 3
            ],
            [
                "name" => "Lei Yang",
                "affliation" => "School of Electrical Engineering, Zhengzhou University, Zhengzhou",
                "country" => "China",
                "image" => "board-member-image/seer/10.png",
                "biography" => "",
                'order_id' => null ,'journal_id' => 3
            ],
            [
                "name" => "Constantinos Chrysikopoulos",
                "affliation" => "Department Of Civil And Environmental Engineering, Kalifa University, Abu Dhabi",

                "country" => "United Arab Emirates",
                "image" => "board-member-image/seer/17.png",
                "biography" => "
                  <p>
                  Prof. Constantinos V. Chrysikopoulos received his B.S. in Chemical Engineering (1982) from the University of California, San Diego (UCSD), and M.S. in Chemical Engineering (1984) from Stanford University, Engineer Degree (1986) and Ph.D (1991) both in Civil and Environmental Engineering from Stanford University. He worked as a Post-Doctoral Research Associate (1991) in the Department of Civil and Environmental Engineering, Stanford University; Assistant, Associate and Full Professor (1991-2004) in the Department of Civil and Environmental Engineering, University of California, Irvine (UCI); and Full Professor (2004-2013) in the Department of Civil Engineering, University of Patras, Greece. He is currently a Professor at the School of Chemical and Environmental Engineering, Technical University of Crete, Greece (2013-], and in Civil and Environmental Engineering, Khalifa University, UAE (2022- ). He is the author of 132 peer-reviewed articles in professional journals, and his h-index is 44 (Web of Science), 47 (Scopus) 55 (Google Scholar). His research has focused on various experimental as well as theoretical aspects of contaminant transport in porous media and environmental systems. Current research areas include the fate and transport of nanoparticles and biocolloids (e.g., viruses, bacteria, nano pesticides) in subsurface formations, transport of polydisperse colloids in natural fractures, and dissolution of multi-component nonaqueous phase liquids in porous media. He has also worked in the areas of atmospheric dispersion, mathematical modeling of reactive transport in subsurface formations, and the development of ideal tracers for groundwater and hydrothermal studies. Furthermore, his research group is exploring the possibility of reducing environmental pollution with the employment solar solar-powered reactors for anaerobic wastewater treatment and the development of an environmentally friendly technology for groundwater remediation using acoustic waves.
                  </p>
                  ",
                'order_id' => null ,'journal_id' => 3
            ],
            [
                "name" => "Shulin Xu",
                "affliation" => "School of Culture Tourism and Geography, Guangdong University of Finance & Economics, Guangzhou",

                "country" => "China",
                "image" => "board-member-image/seer/13.png",
                "biography" => "
                   <p>
                   Dr. Shulin Xu has been serving as an assistant professor at the Guangdong University of Finance & Economics since September 2023. Prior to this, Dr. Xu held the position of Assistant Professor at the School of Economics, Guangzhou College of Commerce, from July 2019 to July 2023.
                   </p>
                   <p>
                   With a profound interest in understanding the intricacies of financial markets and economic systems, Dr. Xu's work seeks to shed light on the fundamental principles underlying these domains.
                   </p>
                   <p>
                   In addition to his scholarly pursuits, Dr. Xu has been an active contributor to the academic community through his referee service for various esteemed journals, including Energy Economics, Resources Policy, Empirical Economics, China & World Economy, and many others.
                    Dr. Xu's research endeavors and dedication to advancing knowledge in sustainable energy and environmental economics make him a valuable addition to the academic landscape.
                   </p>
                   ",
                'order_id' => null ,'journal_id' => 3
            ],
            [
                "name" => "Letizia Di Bella",
                "affliation" => "Earth Sciences Department of Sapienza, University of Rome. Piazzale Aldo Moro 5, 00135 Rome",

                "country" => "Itlay",
                "image" => "board-member-image/seer/14.gif",
                "biography" => "
                   <p>
                   Letizia Di Bella is an associate Professor in Paleontology and Paleoecology at “Sapienza” University of Rome. She graduated in Geological Science (1990), a PhD in Paleontology (1995) Postdoctoral fellowship at “Sapienza” University of Rome (1996-1998), and three research collaboration fellowships (2000-2006). Since 1994 she is a member of the Italian Paleontological Society and of the Italian Geological Society. Since 1993 she has engaged in numerous research projects; as a specialist in Neogene and Quaternary biostratigraphy of the Mediterranean basin, she performs many conferences during the courses of Micropaleontology and Paleontology. She is a specialist in Micropaleontology, studying mainly foraminifera. In recent years, she also studied the environmental responses of the micro-meiobenthos community to climate changes and to anthropogenic impact.
                      Main scientific interests: biostratigraphy of Neogene-Quaternary marine succession Mediterranean basin through the study of foraminiferal assemblages; taxonomy, ecology and paleoecology of Caenozoic foraminifera finalized to paleoenvironmental and paleoclimatic reconstruction. Studies on recent foraminiferal assemblages as biomarkers in stressed environmental areas and extreme environments (hydrothermal vents; submarine caves, marine canyons). From 1993 she has participated in numerous research projects and international congresses and published 79 articles.
                    </p>",
                'order_id' => null ,'journal_id' => 3
            ],
            [
                "name" => "Omar H. Abdalla ",
                "affliation" => "Department of Electrical Power and Machines, Faculty of Engineering, Helwan University, Cairo, ",

                "country" => "Egypt",
                "image" => "board-member-image/seer/Omar-h-abdalla.jpg",
                "biography" => "
                     <p>
                     Professor Omar Hanafy Abdalla (Fellow of the Egyptian Society of Engineers (ESE), Life Senior Member of the IEEE, Member of Cigre-Egypt Reginal Study Committee C2) was born in Cairo, Egypt on 11 May 1945. He received a Ph.D. degree in electrical engineering from the University of Liverpool, England, in 1979. Since B. Sc. graduation in 1967, he has been appointed in various positions in the university as follows: Engineer in 1967, Demonstrator in 1970, Lecturer in 1976, Associate Professor in 1983, Professor in 1987, Head of the Department of Electrical Power and Machines Engineering 1987, Vice-Dean for Postgraduate Studies and Research 1997, Dean of the Faculty of Engineering 2002, Professor Emeritus 2005-now. He has published over 180 papers in Journals and conferences. He is a Reviewer for many national and international periodicals and conferences (e.g. Proceedings IET, IEEE Transactions, IJPSR, JPEL, MEPCON, Cigre, etc.). He is a member of the Editorial Board of the International Journal of Emerging Electrical Power Systems, and the Journal of Electrical Systems, and a member of the Advisory Board of the Trends in Advanced Sciences and Technology Journal. He has been a leader of many research and consulting activities with industry, including electrical power systems, electricity distribution networks, urban village planning, modern control systems, etc. He has been engaged in many activities with professional and social societies, including IEEE, ESE, and others. As a Dean of the Faculty of Engineering, he has introduced new programs in the faculty departments and led the promotion of essential administration and students' activities. He has organized, supervised and participated in conducting training courses for engineers and technicians. He was the Head of the Consultation Board and Head of the Automatic Control Department at the Technical College, Jeddah, KSA, 1988-1993. Prof. Omar H. Abdalla was a member of the Board of Directors of the South Cairo Electricity Distribution Company 2004-2007. From January 2007 to February 2014, he was on leave from Helwan University, working (System Studies Advisor) with Oman Electricity Transmission Company, Muscat, Sultanate of Oman. He was involved in various technical activities and leading strategic planning and transmission system technical studies such as the Transmission Master Plan 2014-2030, Five Year Annual Transmission System Capability Statements, planning and design of new generation and bulk industrial load connections, HV and EHV grid-stations, transmission lines of 400 kV, 220 kV and 132 kV levels, network expansions and reinforcements, Pre-Investment Appraisal Techno-Economic Studies for new projects, etc. He was also involved in the technical studies and practical operation of the interconnection between Oman and UAE. Prof. Omar Hanafy Abdalla received the Encouraging Prize of State in Engineering Sciences 1984, the First Class Distinction of Sciences and Arts, 1985, Helwan University Appreciation Prize in Engineering Sciences and Technology of the year 2007, and the “IEEE PES Chapter Outstanding Award”, for years of dedicated volunteer service to the chapter and to valuable contribution to the Power & Energy Society, IEEE PES Egypt Section, 2018.
                     </p>
                     ",
                'order_id' => null ,'journal_id' => 3
            ],
            [
                "name" => "Liliya Sushkevich",
                "affliation" => "Department of Economic and Social Geography of the Faculty of Geography and Geoinformatics at the Belarusian State University",

                "country" => "Belarus",
                "image" => "board-member-image/seer/liliya-sushkevich.png",
                "biography" => "<p>Liliya (Olegovna) Sushkevich has been the Head of the Department of Economic and Social Geography of the Faculty of Geography and Geoinformatics at the Belarusian State University since 2022. Prior to that (2015-2022), she worked at the Institute of Economics of the National Academy of Sciences of Belarus, including in 2015-2021 as a researcher in the sector of efficiency of mineral resources use, since 2021 as the head of the sector of international competitiveness and regional development of the Center for World Economy. In 2021 defended her dissertation on the topic “Spatio-temporal dynamics of the electric power industry development of the Republic of Belarus” and was awarded a PhD (in Geography). The sphere of scientific interests of L.O. Sushkevich covers economic and geographical development of the fuel and energy sector, territorial organization of energy industries, issues of efficiency of fuel and energy (local) resources use, energy security, and regional development During her career, she has participated in 4 state programs of scientific research related to humanitarian development and economics, as well as the development of the agro-industrial complex; she was the head and executor of 4 research projects carried out under the grant support of The Belarusian Republican Foundation for Fundamental Research and the Ministry of Education of the Republic of Belarus. Sushkevich L.O. has more than 80 scientific publications, including 26 articles in journals and in the collections of scientific articles</p>",
                'order_id' => null ,'journal_id' => 3
            ],
            [
                "name" => "Cristina Perinelli",
                "affliation" => "Department of Earth Sciences, Sapienza University of Rome, Rome",

                "country" => "Italy",
                "image" => "board-member-image/seer/cristina-perinelli.jpg",
                "biography" => "
                         <p>
                         Dr. Cristina Perinelli currently holds the position of Researcher at the Department of Earth Sciences, Sapienza University of Rome. She obtained her PhD at the University of Pisa. Her research activity was conducted by combining field, laboratory and experimental observations and focused mainly on the petrology of igneous rocks including: mechanism of magma production, melt migration and melt/rock interaction acting in the upper mantle and lower crust; influence of volatile components (H2O, CO2) on differentiation of basic magmas; crystallization kinetics of natural silicate systems and time scales of magmatic processes; petrology of subaerial and submarine volcanoes and definition of the eruptive mechanisms. In recent years, her research has also focused on the relationship between magmatic and hydrothermal systems in the genesis of metal deposits.
                         </p>
                         ",
                'order_id' => null ,'journal_id' => 3
            ],
            [
                "name" => "Ebenezer Kojo Acquah ",
                "affliation" => "Department of Materials and Environmental Technology, Tallinn University of Technology· ",

                "country" => "Estonia",
                "image" => "board-member-image/seer/ebenezer-kojo-acqua.png",
                "biography" => "<p>Dr. Ebenezer Kojo Acquah is a rising young researcher and academic dedicated to environmental sustainability and water conservation. Ebenezer pursued a Bachelor of Science in Chemistry at the University of Ghana, Accra, where his research focused on synthesizing cellulose nanocrystals. Ebenezer continued his studies at the Daegu Gyeongbuk Institute of Science and Technology in South Korea, earning a master's degree in energy science and engineering in 2021. His graduate research centered on organic polymers, supramolecular chemistry, and water remediation with a focus on the synthesis of organic porous polymers for the adsorption of micropollutants from water. As a current early-stage researcher at Tallinn University of Technology in Estonia, Ebenezer works in the Laboratory of Photovoltaic Materials under the supervision of Dr. Svetlana Polivtseva. His research aims to develop mesoporous materials capable of removing heavy metals and trace organic pollutants from wastewater and urine. Ebenezer has authored papers on the adsorption of micropollutants from water sources in the Journal of Engineering and Industrial Chemistry, and the Journal of Advanced Materials. Ebenezer's academic excellence has been recognized with several honors. In 2016, he was named the best student of the Ghana Chemical Society. The following year, he received the prestigious Sam Korankye Ankrah Award for his contributions to the field of academia. He is deeply committed to environmental protection. Dr. Acquah views the world as a global village being rapidly urbanized and transformed by technology, with both positive and negative impacts. He is determined to play a role in safeguarding the environment, especially through his research on water remediation and conservation.</p>",
                'order_id' => null ,'journal_id' => 3
            ],
            //cie
            [
                "name" => "Tiantai Deng",
                "affliation" => "Department of Electronic and Electrical Engineering, The University of Sheffield",

                "country" => "United Kingdom",
                "image" => "board-member-image/cie/13.png",
                "biography" => "
                        <p>
                        Dr Tiantai Deng received his B.Eng. from the Harbin Institute of Technologies, Harbin, China, in 2015, and his Ph.D. degree from Queen’s University Belfast, Belfast, Ireland, in 2019. He is currently a lecturer at the University of Sheffield, Sheffield, U.K. Prior to his academic career, he was a senior engineer with HiSilicon, Huawei. His main research interests include hardware acceleration for image processing, deep learning and high-level design environments.
                        </p>
                    ",
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Dr. Salih Berkan Aydemir",
                "affliation" => "Department of Computer Engineering, Amasya University",

                "country" => "Turkey",
                "image" => "board-member-image/cie/03.png",
                "biography" => "<p>
              Dr. Salih Berkan Aydemir received an M.Sc. in Computer Engineering from Anadolu University from 2013 to 2016 and a Ph.D. degrees in Computer Engineering from Eskisehir Technical University from 2016 to 2020, Eskisehir, Turkey. Currently, he is a research assistant professor at the Department of Computer Engineering, Amasya University, Turkey. His research interests include metaheuristic optimization, neural network structures, machine learning, and multi-criteria decision-making, with a focus on extending fuzzy sets.
              </p>",
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Alireza Akhavan-Safar",
                "affliation" => "Institute of Science and Innovation in Mechanical and Industrial Engineering (INEGI), Porto",

                "country" => "Portugal",
                "image" => "board-member-image/cie/04.png",
                "biography" => "
               <p>
               Alireza Akhavan-Safar obtained his Ph.D. in Mechanical Engineering in 2017. As a coordinating researcher at INEGI, Portugal since 2018, he possesses diverse expertise in adhesives and adhesive joints, covering fatigue, fracture, impact, environmental factors, creep, etc. Alireza has been engaging in multiple industrial projects. He is the Editor-in-Chief of the Journal on Mechanics of Solids at the University of Porto and is a member of the editorial boards for the Proc IMEchE, Part L: Journal of Materials Design and Applications (Sage), Journal of Metals (MDPI), and Journal of Adhesives (MDPI). Furthermore, Alireza is a member of the organizing committees of the International Conference on Durability, Repair and Maintenance of Structures and the International Conference on Vehicle Body Engineering. He serves as the scientific committee member of the International Conferences on Materials Design and Application, Structural Adhesive Bonding, and Mechanics of Solids.
               </p>
               <p>
               Moreover, Alireza has been served as a reviewer for over 60 ISI journals. Alireza has supervised or co-supervised 16 master's and 8 PhD theses. Alireza's expertise extends to reviewing research proposals for international funding institutions.
               Alireza has published over 100 ISI papers and delivered approximately 150 presentations at international conferences. He has also authored or co-authored 4 international books and contributed to 11 book chapters.
               </p>
               ",
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Dimitrios S. Sophianopoulos",
                "affliation" => "Department of Civil Engineering, University of Thessaly, Pedion Areos, Volos",
                "country" => "Greece",
                "image" => "board-member-image/cie/18.png",
                "biography" => "
                <p>
                Dimitrios Sophianopoulos is a Professor of Structural Stability, Dynamics and Steel Structures at the Department of Civil Engineering, University of Thessaly, Volos, Greece. He is also the Former Director of the Laboratory of Strength of Materials and Micromechanics in the same Department and the Former Head of the Structural Engineering Division. Prof. Sophianopoulos earned his Ph.D. in 1997 from the School of Civil Engineering of the National Technical University of Athens, Greece and his Bachelor in 1982 from the same Institution. He has published 54 papers in scholarly journals and 71 refereed National and International Conference papers, with more than 680 citations in Scopus (h-index 9) and about 1200 in Google Scholar (h-index 12). Prof. Sophianopoulos is a member of the Editorial Board of 5 International Journals and serves as a Reviewer in more than 15 high-impact international Journals of his field. He is also a member of ASCE, AIAA, Structural Stability Research Council and ISCES. He has supervised three (3) completed PhDs (and 3 more in progress), and numerous Master and Bachelor Theses. His Teaching experience includes undergraduate, graduate and postgraduate courses both in his country and abroad as a visiting Professor.
                </p>
                ",
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Ashraf Abdel Badee M. Ghorab",
                "affliation" => "Head of the Mechanical Power Department, Faculty of Engineering, Ain Shams University,  Cairo",

                "country" => "Egypt",
                "image" => "board-member-image/cie/14.png",
                "biography" => "
              <p>
              Prof. Dr. Ashraf Ghorab is a seasoned professional with extensive experience in engineering academia, research, and industry. Dr. Ghorab earned an M.Sc. in 1990 and a Ph.D. from Reading University, England, in 1993.
              </p>
              <p>
              Over the years, Dr. Ghorab has held various academic positions at Ain Shams University, including demonstrator, associate professor, and currently serving as a full professor since 2018. Notably, he has been heading the engineering department since October 2023.
              In addition to his academic roles, Dr. Ghorab supervises numerous M.Sc. and Ph.D. students and serves as the head of the consultancy unit at Ain Shams University's Faculty of Engineering.
              </p>
              <p>
              Furthermore, Dr. Ghorab is recognized internationally as a senior trainer and inspector for electro-mechanical and construction works, overseeing safety inspections and root cause analyses for over 300 factories worldwide. He specializes in maintenance planning, failure diagnosis, and renovation projects, assisting companies in implementing maintenance and safety contracting strategies for business development.
              </p>
              ",
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Xinqing Xiao",
                "affliation" => "Associate professor, College of Engineering, China Agricultural University",
                "country" => "China",
                "image" => "board-member-image/cie/01.jpg",
                "biography" => "<p>
                <b> Xinqing Xiao </b> is associate professor in China Agricultural University. He has made innovative contributions in the fields of smart sensing, flexible electronics, self-powered sensing, battery-free sensing, smart agriculture, food monitoring. In the past five years, he has presided over and completed the National Natural Science Foundation Youth Program, the national key research and development international cooperation science and technology innovation project, the China Post doctoral Science Foundation projects and the provincial and ministerial key laboratory open projects. He has published more than 60 academic papers in domestic and foreign journals, and accumulated rich research experience
                 </p>",
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Jawwad Nasar Chattha",
                "affliation" => "Department of Electrical Engineering, University of Management and Technology, Lahore ",
                "country" => "Pakistan",
                "image" => "board-member-image/cie/19.jpg",
                "biography" => "<p>
                  Dr. Jawwad Nasar Chattha received a bachelor's degree in electrical engineering from the University of Engineering and Technology, Lahore, in 2006, a master's degree in electrical engineering from Virginia Tech in 2009, and a Ph.D. in communication theory from the Lahore University of Management Sciences, Lahore, in 2018. He is currently an assistant professor and departmental chair of the Electrical Engineering department at the University of Management and Technology, Lahore.
                  His research interests include communication theory and computer networking.
                  </p>",
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Germin Elgohary",
                "affliation" => "Urban Design and Planning Department Faculty of Engineering Ain Sham University",
                "country" => "Egypt",
                "image" => "board-member-image/cie/17.png",
                "biography" => "<p>
                  Professor Germin Elgohary is an esteemed member of various prestigious associations and organizations, including ECLAS (European Council of Landscape Architecture Schools), the Le-Notre Institute project, ISOCARP (The International Society of City and Regional Planning), and the Academic Committee for Landscape Architecture New Program at Ain Shams University.
                  Specialization: Architectural Design/ Working Drawings/ Visual Design/ Green Architecture/Sustainable Landscape / Landscape Architecture.
                  </p>",
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "André Samuel Martins Gonçalves",
                "affliation" => "Polytechnic University of Castelo Branco",
                "country" => "Portugal",
                "image" => "board-member-image/cie/05.png",
                "biography" => "
                  <p>
                  Dr. André Gonçalves is presently an assistant professor at Dr. Lopes Dias School of Health from Polytechnic University of Castelo Branco, Portugal. He holds a PhD in Management from the University of Beira Interior, Portugal. He is a researcher at the Research Center of the Department of Management and Economics (NECE) at the University of Beira Interior, Portugal. He is also the Head Nurse at the Unit for Integrated Continuous Care from SCM Castelo Branco, Portugal. He is the author and co-author of articles and communications at international conferences on the topics of product innovation, sustainability, and management of healthcare teams and organizations.
                  </p>
                  ",
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Rajesh Banu",
                "affliation" => "Associate Professor at the Department of Biotechnology, Central University of Tamil Nadu (CUTN)",
                "country" => "India",
                "image" => "board-member-image/cie/02.png",
                "biography" => "<p>
               Dr. J. Rajesh Banu presently working as an Associate Professor at the Department of Biotechnology, Central University of Tamil Nadu (CUTN), India. Formerly, he was a visiting professor at the Center for Excellence in Environmental Studies, King Abdul Aziz University, Saudi Arabia. He has 19 years of teaching experience in national (Anna University & CUTN) and international universities (SKKU, South Korea). Dr. J. Rajesh Banu is a visiting researcher at East China Normal University, China, and a former post-doctoral fellow at Sungkyunkwan University (SKKU), South Korea. He is the author of 340 publications in SCI and SCIE journals with a cumulative impact factor of 2010.  His publications achieved more than 14000 citations and 63 H index. He is a senior editor of e-Prime, an Elsevier journal. He authored 5 books and published 50 book chapters and 14 conference proceedings. He obtained 10 Major grants from the Government of India and two consultancies from industries. He guided 17 Ph.D. students and 100 postgraduate engineering students in the discipline of environmental engineering and Science. His name is classified among the top 2% of scientists worldwide by independent researchers at Stanford University.  He was awarded with Think of Ecology Award by Hiyoshi, Japan, in 2018. His research centers on waste to energy, value-added product recovery from waste, biological wastewater treatment, Nutrient removal, Membrane Bioreactor, and Microbial Fuel cells.
                 </p>",
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Abbas Hussain",
                "affliation" => "Mechanical Engineering Department, National University of Science and Technology, Islamabad",

                "country" => "Pakistan",
                "image" => "board-member-image/cie/20.jpg",
                "biography" => "<p>
                  Abbas Hussain has been serving as an Assistant Professor in the Mechanical Engineering Department at the National University of Science and Technology, Islamabad, Pakistan, since September 2019. His research interests encompass Mechanics and Dynamics of Machining Processes, Modeling of Micro Machining Operations, Structural Vibration, Machine Learning, and Additive Manufacturing. In August 2019, he earned his Ph.D. degree under the supervision of Dr. Ismail Lazoglu at Koc University, Istanbul, Turkey. He obtained his B.E. in Mechanical Engineering from N.E.D University, Karachi, Pakistan, in 2011.
                  </p>",
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Mohamed EL-Shimy Mahmoud Bekhet",
                "affliation" => "Department of Electrical Power and Machines – Faculty of Engineering - Ain Shams University",

                "country" => "Egypt",
                "image" => "board-member-image/cie/16.png",
                "biography" => "
                  <p>
                  Prof. Dr. Mohamed EL-Shimy Mahmoud Bekhet (M. EL-Shimy) is currently a professor of the electrical power systems with the Department of Electrical Power and Machines – Faculty of Engineering - Ain Shams University. He is also an electromechanical specialist, a freelance trainer, technical advisor, and a member of many associations and professional networks. He is a technical reviewer with some major journals and conferences. His fields of interest include electric power systems: analysis, stability, economics, optimization, distribution, renewable energy integration, and reliability.
                  </p>
                  ",
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Mahmoud Ebrahimi",
                "affliation" => "Department of Mechanical Engineering, University of Maragheh, Maragheh",

                "country" => "Iran",
                "image" => "board-member-image/cie/06.png",
                "biography" => "
                      <p>
                      Dr. Mahmoud Ebrahimi, an associate professor of mechanical engineering at the University of Maragheh, Iran, is currently studying for a research fellowship at Shanghai Jiao Tong University, China. He received his Ph.D. degree in 2015 from the Mechanical Engineering Department of Iran University of Science and Technology (IUST). Mahmoud is the author of more than 75 papers published in international journals and 35 papers presented at national and international conferences. His research interests include metal forming processes, severe plastic deformation (SPD) methods, multilayered composites, and the characterization of ultrafine-grained and nanostructured metals and alloys.
                      </p>
                      <p>
                      He has been featured among the World's Top 2% Scientists List in 2020, 2021, and 2022, according to a Stanford University study.
                      </p>
                      ",
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Shruti Aggarwal",
                "affliation" => "Department of Computer Science and Engineering, Thapar University, Patiala",

                "country" => "India",
                "image" => "board-member-image/cie/07.png",
                "biography" => "
                        <p>
                        Dr. Shruti Aggarwal is a highly accomplished researcher and educator in the field of computer science. She has a Ph.D. in Computer Science and has published numerous research papers in various national and international journals. Dr. Aggarwal has also authored several books and holds multiple patents in the field of data sciences. Dr. Aggarwal has a passion for teaching and has been actively involved in educating students for over a decade. She has taught various courses in computer science at both the undergraduate and postgraduate levels. Dr. Aggarwal has also been involved in organizing technical and cultural events and has successfully conducted online proctored examinations. Dr. Aggarwal is a member of several prestigious organizations, including IEEE, IAENG, and IACSIT. She has received numerous awards and recognitions for her contributions to the field of computer science, including the Best Researcher Award at the Global Awards on Artificial Intelligence and Robotics. Dr. Aggarwal’s research interests include data mining, machine learning, and software fault prediction. She is also passionate about developing free and open-source online educational platforms and supporting young talent in the field of research. Dr. Shruti Aggarwal is a highly accomplished and dedicated researcher and educator who has made significant contributions to the field of computer science.
                        </p>
                        <p>
                        Dr. Shruti Aggarwal works as an assistant professor in the Department of Computer Science and Engineering. She has worked as an associate professor and head at Chandigarh University and has pursued her doctorate in software engineering from N.I.T., Jalandhar. She has earned her Master’s degree from U.I.E.T., Panjab University, in 2011 and B.Tech. (C.S.E.) from Kurukshetra University in 2008. In more than 13 years of her teaching career at reputed institutes like N.IT., Kurukshetra University, etc; she has guided 36 research scholars, and published more than 100+ research papers in various Journals and Conferences of national and international repute. She has conducted numerous technical and non-technical events, supported various industrial projects, and has given talks in Data Mining and Software Engineering domain. She is the reviewer of various prestigious journals, and she has hosted session chairs in various international conferences. She has 14 patents and has been awarded with several awards like Abdul Kalam Innovation Special Appreciation Award, 50 Eminent Researchers of 2021, Research Excellence Award, Womonator Award, 100 Eminent Academicians of 2021, Global Femina Excellence Award, etc. from various reputed international and national organizations. She is currently working on book chapters, research projects, and patents in the domain of data science.
                        </p>
                        ",
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Yehia Kamal Abdelmonem Hanafy",
                "affliation" => "Irrigation & Hydraulics Department, Faculty of Engineering, Ain Shams University, Cairo",

                "country" => "Egypt",
                "image" => "board-member-image/cie/15.png",
                "biography" => "
                          <ul class='points'>
                          <li>More than 30 years of teaching water engineering courses to undergraduate and graduate students at the Faculty of Engineering, Ain Shams University.</li>
                          <li>More than 20 years as a coordinator in research projects and peer reviewer in scientific journals.</li>
                          <li>More than 30 specialized research papers have been published around the world.</li>
                           <li>He has more than 25 PhD and MSc researchers under his supervision.</li>
                            <li>More than 120 engineering projects as general coordinator/manager in the design and evaluation of hydraulic systems.</li>
                            <li>More than 17 years of experience in designing and conducting training courses in Egypt and the Arab countries in the field of water engineering.</li>
                            <li>More than 30 years as a professional engineer in the field of water engineering, including 22 years as a general consultant to water distribution and sewage collection companies.</li>
                            <li><b>Research Interests:</b> Irrigation and Drainage Engineering, Hydraulics and Hydraulic Structures, Surface and Groundwater Hydrology, Water Quality, etc.</li>
                            </ul>
                          ",
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Anil Kumar Verma",
                "affliation" => "Computer Science & Engineering  Thapar Institute Of Engg & Technology, Patiala",

                "country" => "India",
                "image" => "board-member-image/cie/08.png",
                "biography" => "
                          <p>
                          Dr. A K Verma is currently working as a Professor in the Department of Computer Science and Engineering at Thapar Institute of Engineering and Technology, Patiala in Punjab (INDIA). He is also the Coordinator of Computer Science and Engineering at the Derabassi Campus of this Institute. He received his B.S. M.S. and PhD. in 1991, 2001 and 2008 respectively, majoring in Computer Science and Engineering. He has worked as a Lecturer at M.M.M. Engg. College, Gorakhpur, from 1991 to 1996. From 1996 he is associated with the same University. He has been a visiting faculty member at many institutions. He has published over 150 papers in refereed journals and conferences (India and Abroad). He is a member of various program committees for different International/National Conferences and is on the review board of various journals. He has visited – USA(2005), South Korea(2012), Japan(2013), Ireland(2015) and Bahrain(2017) for academic purpose.
                          </p>
                          <p>
                          He is a MACM (USA), LMCSI (Mumbai), GMAIMA (New Delhi). He is a certified software quality auditor by MoCIT, Govt. of India. His research interests include wireless networks, routing algorithms, mobile computing, and securing ad hoc networks. He is a Group Lead for the Mobile Computing and Communication (MC2) Research Group.
                          </p>
                          ",
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Muhamad Fazly Abdul Patah",
                "affliation" => "Department of Chemical Engineering, Faculty of Engineering, University of Malaya",

                "country" => "Malaysia",
                "image" => "board-member-image/cie/09.png",
                "biography" => "
                            <p>
                            Dr Muhamad Fazly Abdul Patah first joined Universiti Malaya in 2012 as a research fellow and currently serves as a senior lecturer teaching Bachelor of Chemical Engineering and Master of Safety, Health & Environmental Engineering programs. He received his BEng and PhD from the University of Canterbury, Christchurch, New Zealand. His main research interest is in the production of chemicals and sustainable energy alternatives in the form of char/biochar, liquid fuel and hydrogen-rich gas from various low-value materials and unwanted wastes. He is actively supervising Masters and PhD research students in related engineering topics.
                            </p>
                            <p>
                            His area of research includes: Thermochemical Torrefaction, Pyrolysis, Gasification, Combustion and Liquefaction processes, Plastic, biomass, rubber and municipal wastes, chemical upcycling to higher-value products Ozone gas application for sterilization and water treatment applications Catalysis, chemical reaction and reactor design Hydrodynamic simulation of fluid flow using Computational Fluid Dynamics software Liquid atomization/spray with and without reaction Bioreactor design for medicinal mushroom mass production.
                            </p>
                            ",
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Qiang Cheng",
                "affliation" => "Beijing University of Technology",

                "country" => "China",
                "image" => "board-member-image/cie/10.png",
                "biography" => "
                              <p>
                              Qiang Cheng is a professor of Beijing University of Technology. He received his  Ph.D. degree from Huazhong University of Science and Technology in 2009. He is the deputy director of Beijing Key Laboratory of Advanced Manufacturing Technology and the director of the Key Laboratory of Digital Design and Testing Technology for Heavy Duty Machine Tools in Mechanical Industry. He has published more than 100 SCI papers and 20 EI papers and has been authorized more than 40 national invention patents and software copyrights. He is currently an expert in the evaluation of the department of industry and materials of the National Natural Science Foundation of China, a member of Industrial Big Data and Intelligent Systems Branch of Mechanical Engineering Society of China, a member of the medical integration branch of China Medical and Health Culture Association, the 10th Committee of Mechanical Industry Automation Branch of China. He is the associate editor of Journal of Modern Industry and Manufacturing, a guest editor of magazines such as Advanced in Mechanical Engineering and The Scientific World Journal, and reviewer of the more than 20 international journals, such as International Journal of Advanced Manufacturing Technology, Tribology International.
                              </p>
                              ",
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Ravinder Kumar",
                "affliation" => "Thapar Institute of Engineering and Technology",

                "country" => "India",
                "image" => "board-member-image/cie/11.png",
                "biography" => "
                                <p>
                                Dr. Ravinder Kumar is an accomplished researcher and educator in the field of Computer Science and Engineering. With a Ph.D. degree, he holds a strong background in both teaching and research, spanning over two decades. As an Associate Professor at the prestigious Thapar Institute of Engineering and Technology (TIET), he has made significant contributions to the academic community.
                                </p>
                                <p>
                                His research interests cover a wide range of topics, including algorithms, combinatorial optimization, and machine learning. This expertise allows him to explore both the theoretical foundations and practical applications of these areas, contributing to the advancement of knowledge in the field.
                                </p>
                                <p>
                                Dr. Kumar's contributions are evident through his extensive publication record, which includes over 80 academic papers in renowned journals and conferences. His research findings have been published in esteemed publications such as IEEE Transactions on Knowledge and Data Engineering, IEEE Communications Magazine, Information Sciences, Future Generation Computer Systems, and Computer Communications. These highly cited papers showcase the impact and relevance of his work within the academic community.
                                </p>
                                <p>
                                In addition to his research and publications, Dr. Kumar is an active member of various professional bodies. He serves as a reviewer for reputable journals, which highlights his commitment to maintaining high academic standards and contributing to the peer-review process.
                                As an experienced educator, he has successfully supervised more than 25 research scholars in the field of Machine Learning and algorithms. The fact that one of his students received support from CSIR funding is a testament to his ability to mentor and guide aspiring researchers.
                                </p>
                                <p>
                                Dr. Ravinder Kumar's expertise and dedication make him a valuable asset in the realm of research and education. His contributions have had a positive impact on the field of Computer Science and Engineering, and he continues to inspire and influence the next generation of researchers and scholars at the Thapar Institute of Engineering and Technology.
                                </p>
                                ",
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Mohd Ridha Bin Muhamad",
                "affliation" => "Department of Mechanical Engineering, Faculty of Engineering, Universiti Malaya, Kuala Lumpur",

                "country" => "Malaysia",
                "image" => "board-member-image/cie/12.png",
                "biography" => "
                                  <p>
                                   Dr. Mohd Ridha is a Senior Lecturer in the Department of Mechanical Engineering and is the Deputy Head of Advanced Manufacturing and Materials Processing (AMMP) Center at the University of Malaya. He obtained Doctor of Engineering from Utsunomiya University Japan in 2015, specializing in magnetic abrasive finishing for superfinishing of tube internal surface for clean environment applications. Prior to his doctoral study, he worked at Yamazaki Mazak Corporation as a Senior Mechanical Design Engineer focusing on CNC prototype machine design and evaluations for mass production. He was involved in the design and development of several CNC machines, including the Quick Turn Nexus series and performed more than 100 variations of cutting parameters such as OD and ID cutting, boring, intermittent cutting, roundness cutting using the diamond tool, continuous 8 hours cutting etc. to confirm the machine`s limits and capabilities.
                                  </p>
                                  <p>
                                  Currently, he is collaborating with Joining Welding Research Institute, Osaka University Japan, to develop a friction stir welding process in a sustainable way that can be implemented in Malaysia's manufacturing industry. The project explores the possibilities of joining similar and dissimilar materials such as polycarbonate/aluminum, aluminum/stainless steel, magnesium/steel, and aluminum/copper for various applications in the automotive and semiconductor industries. Analysis of welds using Transmission Electron Microscopy for joints with carbonaceous nanomaterial additives such as CNT and Graphene for the purpose of enforcement is his current passion. He was awarded the Distinguished International Associate from the Royal Academic of Engineering UK for his project on friction stir welding. He actively applies for research projects and has secured various research grants from domestic and international funders. He has completed supervision of 4 PhD and 8 Master students, and is currently supervising 10 PhD and 1 Master candidate.
                                  </p>
                                  ",
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Sumegh Tharewal",
                "affliation" => "Free University of Bozen-Bolzano",

                "country" => "Italy",
                "image" => "board-member-image/cie/13.jpeg",
                "biography" => "
                                  <p>
                                   Currently working as a Postdoctoral Researcher at the Free University of Bozen-Bolzano, Italy.
                    Before joining Postdoc, he worked as an Assistant Professor at Symbiosis Institute of Computer Studies and Research(SICSR), Symbiosis International (Deemed) University(SIU), Pune, India. he was Program Head of M.Sc. Blockchain Technology at Dr. Vishwanath Karad MIT World Peace University, Pune, India. He completed his PhD from Dr. Babasaheb Ambedkar Marathwada University Aurangabad, Maharashtra, India in the Department of Computer Science, and Information Technology. He has 13+ years of experience in Research and academics. He worked with different reputed organizations like Symbiosis, MIT, Pune, Manipal University Jaipur, Dr. Babasaheb Ambedkar Marathwada University, Aurangabad, and Government Institute of Forensic Science, Aurangabad, Maharashtra. His research interests include Blockchain Technology, Biometrics, Machine Learning, Artificial Intelligence, and Pattern Recognition, and Image Processing.
                                  </p>
                                  <p>
                                  He is a PhD. Supervisor at symbiosis, Dr. Vishwanath Karad, MIT World Peace University, Pune, and PhD Co-supervisor at Manipal University, Jaipur, Rajasthan, India. He guided more than 30 Postgraduate students and 20 undergraduate students in their projects.
                                  </p>
                                  ",
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Wenyou Zhang",
                "affliation" => "Department of Mechanical, Manufacturing & Biomedical Engineering,  Trinity College Dublin",

                "country" => "Ireland ",
                "image" => "board-member-image/cie/14.jpg",
                "biography" => '
                <p>
                Dr. Wenyou Zhang is currently a research fellow at the Mechanical, Manufacturing & Biomedical Engineering of Trinity College Dublin, Ireland. He has an interdisciplinary education and research experience in Mechanical Engineering (Additive Manufacturing) and Biomedical Engineering, including materials research, design, finite element modeling and optimization, manufacturing, and characterizations. He holds a PhD in Mechanical and Biomedical Engineering from the University of Galway, Ireland and his doctoral training was funded by the Government of Ireland Postgraduate Scholarship. Due to his contributions to the Additive Manufacturing field, he is currently an early career editor and board member of three journals: Chinese Journal of Mechanical Engineering: Additive Manufacturing Frontiers journal, an editorial board member of three SCI journals, and a guest editor of Materials, and Materials Science in Additive Manufacturing journal.
                </p>',
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Muhammad Asif",
                "affliation" => "Department of Mechanical Engineering, National University of Sciences and Technology (NUST)",

                "country" => "Pakistan ",
                "image" => "board-member-image/cie/15.jpg",
                "biography" => '
                <p>
                Dr Muhammad Asif, is a dedicated educator currently serving as an Assistant Professor at the National University of Sciences and Technology (NUST), Pakistan. With over 11 years of experience in both teaching and research, Dr Asif brings a wealth of expertise to the field of mechanical engineering.
                    Throughout his career, Dr Asif has been actively involved in cutting-edge research, resulting in the publication of over 28 scientific papers in reputable journals. He has demonstrated a strong commitment to advancing knowledge in his field and has contributed significantly to the academic community through his scholarly work.
                    In addition to his research contributions, Dr Asif is deeply passionate about education and has a proven track record of excellence in teaching. He is dedicated to nurturing the next generation of engineers, imparting both theoretical knowledge and practical skills to his students at NUST.
                    As a member of the editorial board, Dr Asif brings a unique blend of academic rigor, research acumen, and pedagogical insight. He is committed to upholding the highest standards of scholarly publication and is excited to contribute his expertise to furthering the mission of the journal.
                                            </p>',
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Mohamed A.F. Mahdy",
                "affliation" => "Department of Architectural Engineering, College of Engineering and Design, Kingdom University",

                "country" => "Bahrain ",
                "image" => "board-member-image/cie/mohamed-mahdy.png",
                "biography" => '
                  <p>
                  Dr. Mohamed A.F. Mahdy works as an Assistant Professor in the field of Architectural Engineering at the College of Engineering and Design, Kingdom University. He has extensive experience in teaching and supervising MSc and PhD students. His research interests include Architectural Engineering, the built environment, and sustainable urban design and planning. Dr. Mahdy is dedicated to advancing knowledge in these areas and contributing to the development of innovative, sustainable solutions in urban environments.
                  </p>',
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Ragab A. El-Sehiemy",
                "affliation" => "Electrical Engineering Department, Faculty of Engineering,  Kafrelshiekh University",

                "country" => "Egypt  ",
                "image" => "board-member-image/cie/El-Sehiemy.jpg",
                "biography" => '
                    <p>
                    Ragab A. El-Sehiemy (SMIEEE) gained his B.Sc., M.Sc., and Ph.D. in Electrical Power Systems from Menoufia University, Egypt, in 1996, 2005, and 2008, respectively. He has worked with the Arab Contractor Company as an electrical engineer for ten years. He joined the Faculty of Engineering at Kafrelsheikh University as an Assistant Researcher in 2009. Currently, he is a Full Professor of Electrical Power Systems at Kafrelshiekh University, Egypt. He received the Prof. Mahmoud Khalifia Award in Power System Engineering from the Academy of Research and Technology in 2016 and the Computer and Information in Industry Award from the Academy of Research and Technology in 2021. In 2021, Prof. El-Sehiemy was among the world’s top 2% high citations. Prof. El-Sehiemy is also a member of the Electricity and Energy Research Committee at the Academy of Research and Technology, Egypt. Finally, he was selected as a member of the arbitration committee in the scientific committee for the promotion of professors and assistant professors.
                    His research interests include power-system operation, planning and control, smart grids, renewable energy, and AI and its application to power systems.
                    </p>',
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Mehdi Gheisari",
                "affliation" => "Department of Computer Science, Islamic Azad University, Tehran,",

                "country" => "Iran",
                "image" => "board-member-image/cie/mehdig-heisari.jpg",
                "biography" => '
                      <p>
                      Dr. Mehdi Gheisari is an Iranian Ph.D. holder in computer science who obtained his doctorate from China. He has actively engaged in collaborative projects with colleagues from various countries, spanning different domains, to expand his breadth of knowledge. His research interests encompass a wide range of areas, including IoT, E-Healthcare, Smart City, Machine Learning, Remote Sensing Data, Distributed Systems, and Cybersecurity. In addition to his research pursuits, he has actively contributed to the academic community. He has served as a reviewer for well-established venues such as IEEE Communication Magazine and has been a member of the Technical Program Committee (TPC) for several conferences.
                      </p>',
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Dr Aznida Abu Bakar Sajak",
                "affliation" => "Department of Computer Engineering, Universiti Kuala Lumpur, Kuala Lumpur",

                "country" => "Malaysia",
                "image" => "board-member-image/cie/aznida-abu-bakar-sajak.jpg",
                "biography" => '
                        <p>
                        Dr. Aznida Abu Bakar Sajak graduated from the University of Liverpool in 2005 with a Masters of Science (Engineering) in Telecommunications and Microelectronics Systems. Loves Liverpool so much that she decided to pursue her PhD at the same university sponsored by the Islamic Development Bank, Saudi Arabia. Was in Digi Telecommunications, a mobile service provider in Malaysia owned by Telenor ASA of Norway, for almost six years before joining UniKL in 2011. Holds a PhD in Electrical Engineering and Electronics from the University of Liverpool in 2019. A member of the Board of Engineers Malaysia, The Institution of Engineers, Malaysia and The Institution of Engineering and Technology, UK
                        </p>',
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Mahmoud Zadehbagheri",
                "affliation" => "Department of Electrical Engineering, Islamic Azad University, Yasouj Branch",

                "country" => "Iran",
                "image" => "board-member-image/cie/mahmoud-zadehbagheri.png",
                "biography" => '
                          <p>
                          Dr. Mahmoud Zadehbagheri received his Ph.D degree in Electrical Engineering from Universiti Teknologi Malaysia (UTM), Johor, Skudai, Malaysia, and Hakim Sabzvari University, Khorasan, Iran, in 2017. He is an associate professor with the Department of Electrical Engineering, Islamic Azad University, Yasouj Branch. He is a member of the IEEE Smart Grid Community and IEEE PES Technical Committee. Since 2018, he has been a co-supervisor and a consulting professor of more than 13 Ph.D and 50 M.Sc students. He is the author of two books, one published book chapter, 65 ISI-ranked journal articles, and 90 conference papers. He is currently collaborating as a reviewer and editorial board with the journals Applied Energy, Hydrogen Energy, IJRER, Micro Machines, sensors, Energy, EPCS, and IJPEDS. His research interests include the fields of power electronics, FACTS devices, optimization methods, renewable energy, energy hubs, and power quality
                          </p>',
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Seyed Majid Hashemzadeh",
                "affliation" => "Faculty of Electrical and Computer Engineering. University of Tabriz. Tabriz",

                "country" => "Iran",
                "image" => "board-member-image/cie/seyed-majid-hashemzadeh.jpg",
                "biography" => '
                            <p>
                            Dr Seyed Majid Hashemzadeh received his PhD in power electronics engineering from the University of Tabriz, Tabriz, Iran (2023). He worked as a research assistant at Qatar University from May to August 2023. Currently, he is working as a research associate at the University of Tabriz. His research focuses on designing and modeling of dc-dc converters, multilevel inverters, solid state transformers, as well as control and operation of photovoltaic power systems, including PV modeling and maximum power point tracking.
                            </p>',
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Kerim Karabacak",
                "affliation" => "Dept. of Electronics and Automation, Dumlupinar Üniversitesi, Kutahya ",

                "country" => "Turkiye",
                "image" => "board-member-image/cie/kerim-karabacak.jpg",
                "biography" => '
                              <p>
                              Dr. Kerim Karabacak completed his undergraduate education in Electrical and Electronics Engineering at Dumlupinar University. He has done his masters thesis on “Fault Diagnostics in Transformers Using Electronic Nose.” Afterward, he completed his PhD thesis on the “Control of Wind-Photovoltaic Hybrid Power Systems with Artificial Neural Networks” at Ege University and obtained his PhD. He has been teaching at the university for 12 years. In parallel with this, he assumed the task of co-founder and director of the start-up company “Triangle Renewable Energy”, which focuses on the development of ANN (Artificial Neural Networks) controlled inverters used for solar and wind energy systems. On renewable energy systems, he has scientific articles published in international peer-reviewed journals and presentations at international scientific conferences. He is actively working as a reviewer in various international academic journals. He contributed to various postgraduate theses as a jury member. He undertook manager and researcher roles in various scientific projects. With his studies in the development of renewable energy technology, he aims to contribute to creating a more liveable world.
                              </p>',
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Abraham Dandoussou",
                "affliation" => "Department of Fundamental Sciences and Engineering Techniques, School of Chemical Engineering and Mineral Industries, University of Ngaoundere.",

                "country" => "Cameroon",
                "image" => "board-member-image/cie/abraham-dandoussou.jpg",
                "biography" => '
                                <p>
                                Professor Abraham Dandoussou is a holder of a Master’s Degree in Computer Science, Electronics and Automation. He is also a holder of a Ph.D in Electrical Engineering and Industrial Automation, obtained at the University of Ngaoundere – Cameroon. After his recruitment as Assistant Lecturer at the University of Buea, Cameroon, he was promoted to Senior Lecturer and then Associate Professor. His main research interest concerns Power Generation and Renewable Energy, and Power Systems and Electrical Drives
                                </p>',
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Yujun Yang",
                "affliation" => "School of Human Settlements and Civil Engineering, Xi’an Jiaotong University, Xi’an",

                "country" => "China",
                "image" => "board-member-image/cie/yujun-yang.jpg",
                "biography" => '
                                    <p>
                                    Dr. Yang Yujun, Ph.D. in Engineering, Assistant Professor and Master\'s Supervisor at Xi\'an Jiaotong University. The main research areas are low-carbon and positive building design methods, regional thermal comfort optimization design, elderly behavior and aging friendly design, etc. Serving as a guest editor in the Buildings(IF=3.8) journal. Serving as a reviewer in over 10 journals, including Building and Environment, Science of the Total Environment, Sustainable Cities and Society, etc. Published 15 academic papers in SCI indexed journals such as Building and Environment or Sustainable Cities and Society, and also published over 20 conference papers. Dr. Yang, joined the editorial board to explore research on Engineering Problems and Legal Challenges in Urban and Rural Low carbon Development in CURRENT INTEGRATIVE ENGINEERING journal. This topic has enormous research potential and is also one of the most cutting-edge scientific issues at present. Urban and rural renewal is a necessary supplement to the development of high-speed urbanization. Rapid development will lead to a large number of problems such as overproduction, energy waste, and unbalanced resource allocation. These problems will reduce people\'s quality of life and the sustainability of future development. Discussing more new low-carbon building technologies in urban and rural renewal can effectively solve the conflict between people\'s increasing demand for quality of life and high energy consumption. At the same time, we also have to face up to the imbalance between urban and rural development. Although regional economic development is different, people in different regions have the right to equal healthy living environments.
                                    </p>',
                'order_id' => null ,'journal_id' => 4
            ],
            [
                "name" => "Gerhard Bezuidenhout",
                "affliation" => "Senior Teaching Fellow, University of Portsmouth",

                "country" => "UK",
                "image" => "board-member-image/jblm/08.png",
                "biography" => "
                        <p>
                        Dr. Gerhard Bezuidenhout is currently a Senior Teaching Fellow at The University of Portsmouth's Strategy, Marketing, and Innovation School, part of the Faculty of Business and Law. I am also the Course Leader for the MSc in International Business & Management. I am also the module coordinator for the Master's Research Project module, which has over 350 students and over 60 supervisors. My current teaching concentration is on strategy and research methodology (I have managed numerous projects over the last two decades).
                        </p>
                        <p>
                        I have graduate and postgraduate degrees (including a doctorate) in strategic management, organizational leadership, general management, and human resource management. I am also a UK Fellow for Teaching and Learning Support in Higher Education (FHEA). I have extensive expertise in university lectures, educational development, research, business ownership and management, sales, and consulting. My current research interests include Strategy-as-Practice. I have written and presented conference papers in the domains of management and human resources. I am also a reviewer for an academic journal specializing in human resources.
                        </p>
                ",
                'order_id' => null ,'journal_id' => 5
            ],
            [
                "name" => "Matt Fuss",
                "affliation" => "Department of Business, Accounting and Sport Management, Geneva College, Beaver Falls, Pennsylvania",

                "country" => "United States",
                "image" => "board-member-image/jblm/09.png",
                "biography" => "
              <p>
              Associate Professor Dr. Matt Fuss received his undergraduate degrees in Business Administration and Spanish and an MBA from Geneva College. He earned his PhD in Rhetoric and Communication with an emphasis in Organizational and Interpersonal Communication from Duquesne University. Professor Fuss holds both senior-level professional certifications in human resources; SPHR-SCP from the Society of Human Resource Management and SPHR from the Human Resource Certification Institute. He is also a Certified Ethics Associate. Professor Fuss is the lead faculty member for the Management major and the Management and Human Resource Management concentrations within the Business Administration major in the Tannelhill Department of Business, Accounting and Sport Management at Geneva College in Beaver Falls, PA. Prior to teaching, Professor Fuss spent over 13 years in human resources and operations management in organizations ranging in size from 125 people to over 24,000.
              </p>
              ",
                'order_id' => null ,'journal_id' => 5
            ],
            [
                "name" => "Marc Y. Tassé",
                "affliation" => "University of Ottawa’s Faculty of Law, Ottawa, Ontario",

                "country" => "Canada",
                "image" => "board-member-image/jblm/10.png",
                "biography" => "
                <p>
                Marc Y. Tassé is a globally recognized expert on corporate misconduct, crisis response, and ethical leadership who has extensive experience as an independent special advisor to various board chairs, board members, and CEOs of corporations and organizations, federal and provincial departments, agencies, and crown corporations.
                </p>
                <p>
                Mr. Tassé advises senior leaders and other key stakeholders of major corporations, foreign and domestic governments, and NGOs on corporate governance and risk management issues. Holder of various academic certificates of completion such as ''ESG Risks and Opportunities'', he also advises his clients on appropriate risk mitigation strategies related to ESG issues, such as climate change, social activism, equity and inclusion, diversity, supply chain considerations, and cybersecurity.
                </p>
                <p>
                A Fellow Chartered Professional Accountant, he advises various clients on high profile and sensitive cases” related to alleged corruption, fraud, money laundering, financial misconduct, conflict of interest, and breach of fiduciary duty.
                </p>
                <p>
                Throughout the years, Mr. Tassé has become a renowned authority on Professional Ethical Dilemmas, earning the privilege to share his insights at a wide range of prestigious conferences both domestically and around the world. He has been invited to speak or serve as a panelist at 537 events across national and international venues, and has also been featured in 189 media interviews.
                </p>
                <p>
                A multiple award-winning lecturer at the University of Ottawa’s Faculty of Law and at the Telfer Executive MBA program, Mr. Tassé has delivered lectures on corporate ethics and financial scandal remediation at some of the world’s premier universities such as McGill University and Harvard University.
                </p>
                ",
                'order_id' => null ,'journal_id' => 5
            ],
            [
                "name" => "David Bolton",
                "affliation" => "School of Management, Swansea University",

                "country" => "United Kingdom",
                "image" => "board-member-image/jblm/18.png",
                "biography" => "
                  <p>
                  David is an Associate Professor and Program Director for Undergraduate Business Management at the School of Management at Swansea University, lecturing in Entrepreneurship and Project Management. Having worked in industry for 20 years, specialising in Sales, Marketing and Business Development and in economic and business support for the Welsh Government he returned to academia in 2013.
                  Since joining Swansea University in 2013, he has been involved in a number of initiatives, most notably the development of cross-campus modules focussing on entrepreneurial mindset and leadership.
                  </p>
                  <p>
                  Within the School of Management, David has focussed on contributing and assisting the development of innovation and enterprise modules and strategic direction as well as the development of professional skills modules on both undergraduate and postgraduate programmes, both nationally within the UK and from an international perspective specialising in the Chinese education sector.
                  David is a Senior Fellow of the Higher Education Academy, Chartered Management Institute and the International Enterprise Educators Program.
                  </p>
                  <p>
                  He is currently Welsh Regional Vice Chair of the Chartered Management Institute and President of Enterprise Educators UK for 2024 and 2025. He also is an external examiner at Keele, Glyndwr and Gloucestershire Universities as well as the University of Western Scotland.
                  </p>
                  ",
                'order_id' => null ,'journal_id' => 5
            ],
            [
                "name" => "Natthinee Thampanya",
                "affliation" => "Senior Lecturer in Finance, Oxford Brookes University",

                "country" => "United Kingdom",
                "image" => "board-member-image/jblm/11.png",
                "biography" => "
                  <p>
                  Dr Natthinee Thampanya is a Senior Lecturer in Finance at Oxford Brookes University, UK. Her main areas of research interest are financial econometrics, financial economics, derivatives, and risk management. She has published a number of high-quality research outputs, and her forthcoming publications are in the Journal of International Financial Markets, Institutions and Money, Technological Forecasting and Social Change, and the Journal of Environmental Management.
                  </p>
                  ",
                'order_id' => null ,'journal_id' => 5
            ],
            [
                "name" => "Fabienne Cadet-Laborde",
                "affliation" => "H. Wayne Huizenga College of Business and Entrepreneurship, Nova Southeastern University",
                "country" => "United States",
                "image" => "board-member-image/jblm/23.png",
                "biography" => "
                    <p>
                    Dr. Fabienne Cadet holds a Ph.D. in Marketing from Hampton University. Currently, Dr. Cadet is an Associate Professor of Marketing at the Huizenga College of Business & Entrepreneurship of Nova Southeastern University in Fort Lauderdale, FL. Her research is motivated by her interests in consumer behavior, services marketing and branding. Dr. Cadet's research has been published in top journals such as the Journal of Business Research and the Thunderbird International Business Review. She was also awarded the Best Practitioner Award Finalist at the 26th Annual Frontiers in Service Conference. In 2023, Dr. Cadet was awarded Poets & Quants Top 40 Under 40 MBA Professors. Prior to her role as a full-time professor, she was both an adjunct professor and industry professional, holding various roles such as Senior Marketing Manager and Senior Market Analyst.
                    </p>
                    ",
                'order_id' => null ,'journal_id' => 5
            ],
            [
                "name" => "Desireé Cranfield",
                "affliation" => "School of Management, Swansea University",

                "country" => "United Kingdom",
                "image" => "board-member-image/jblm/17.png",
                "biography" => "
                    <p>
                    Dr. Desireé Cranfield is appointed as a Senior Lecturer / Programme Director-interim of the Post Graduate MSc Management programme and all pathways,  within the School of Management at Swansea University. She has a Ph.D. in Knowledge Management from Southampton University, an M.Sc. in Data Communication Systems, from Brunel, and completed a PGCert for Higher Education. Dr Cranfield achieved a Senior fellowship of the Higher Education Academy status and is an assessor for the SFHEA at Swansea University. Her academic experience spans more than 18 years (UK and in South Africa). She has undertaken several management roles (Programme Manager, Project Manager, Faculty Graduate school manager) within the Higher Education context and is an external examiner. She is actively involved with the Athena Swan agenda. Her research interests lie within the context of Higher Education in particular, focusing on the enhancement of learning and teaching, improving processes and practices, using technology to enable this, as well as knowledge management and knowledge sharing within this context. She has co-authored several papers on Knowledge sharing and knowledge management, the impact of Covid-19 on students and staff, as well as cyber security perceptions and practices within HEIs. She has recently, in 2023, co-authored two chapters with a focus on Leadership in a digital age and  Knowledge Sharing in Higher Education. She has been invited to review journal articles from well-established journals like Social Sciences and Humanities Open (2023)-Elsevier publication, Information Technology and People, and Sage Open. She has been invited to join the Editorial boards of several well-established journals.
                    </p>
                    ",
                'order_id' => null ,'journal_id' => 5
            ],
            [
                "name" => "Aïda Darouichi",
                "affliation" => "Geneva School of Economics and Management, University of Geneva",

                "country" => "Switzerland",
                "image" => "board-member-image/jblm/12.png",
                "biography" => "
                    <p>
                    Aïda Darouichi started her career in 2011, holding successively several positions in Academia as well as a Management professional across several industries, including audit, healthcare, pharmaceutical and luxury goods.
                    </p>
                    <p>
                    Her professional experience served as a basis for her research on practical phenomena and organizational dynamics that she explores in collaboration with her research team and colleagues.
                    </p>
                    <p>
                    Throughout her career, Aïda Darouichi has gained extensive experience in teaching management to students,  executives and professionals in several Swiss Universities.
                    </p>
                    ",
                'order_id' => null ,'journal_id' => 5
            ],
            [
                "name" => "Kevin Cullinane",
                "affliation" => "University of Gothenburg",

                "country" => "Sweden",
                "image" => "board-member-image/jblm/21.png",
                "biography" => "
                      <p>
                      Prof. Kevin Cullinane is Professor of International Logistics and Transport Economics at the University of Gothenburg. Kevin has been a logistics adviser to the World Bank and transport adviser to the governments of Scotland, Ireland, Hong Kong, Egypt, Chile and the U.K. He holds an Honorary Professorship at the University of Hong Kong and the University of Ningbo in China. He is a Visiting Professor at the VTI (the Swedish National Road and Transport Research Institute), Liverpool John Moores University, Dalian Maritime University and Shanghai Maritime University. Prior to joining the University of Gothenburg on a permanent basis, he was appointed to the lifetime position of Honorary Visiting Professor at the University. Kevin has personally won research and consultancy projects to the value of USD 7m, many of which have informed the policies of national and/or regional governments. He has held other positions as the Director of the Transport Research Institute (TRI) at Edinburgh Napier University, Chair in Marine Transport & Management at Newcastle University, Professor and Head of the Department of Shipping & Transport Logistics at Hong Kong Polytechnic University, Head of the Centre for International Shipping & Transport at Plymouth University, Postdoctoral Research Fellow at the University of Oxford Transport Studies Unit and as Senior Partner in his own transport consultancy company, based in Cairo, Rennes, Hong Kong, Edinburgh and now Gothenburg, In terms of academic outputs, Kevin has published 12 books and over 200 journal papers.
                      </p>
                      ",
                'order_id' => null ,'journal_id' => 5
            ],
            [
                "name" => "Sugoutam Ghosh",
                "affliation" => "Head, Graduate Diploma in Logistics and Supply Chain Management Programme, School of Business, Singapore University of Social Sciences",

                "country" => "Singapore",
                "image" => "board-member-image/jblm/20.png",
                "biography" => "
                      <p>
                      Sugoutam Ghosh serves as a Senior Lecturer and the head of the Graduate Diploma in Logistics and Supply Chain Management at the School of Business, Singapore University of Social Sciences (SUSS). Previously, he held positions as an Assistant Professor at Antalya International University, Turkey, and as a Research Fellow at Nanyang Business School, The Logistics Institute-Asia Pacific, Singapore, and the National University of Singapore. Additionally, he served as a visiting lecturer at the University of Toronto, Canada. Dr. Ghosh obtained his Ph.D. in Supply Chain Management from Nanyang Technological University, Singapore. He holds a Master's degree from IIT Kharagpur and a Bachelor's degree from Jadavpur University. Dr. Ghosh teaches courses on Operations Management, Inventory Management, Optimisation, and Simulation. He has designed and delivered executive training programmes on Supply Chain Planning and Supply Chain Risk Management. His research focuses on inventory management and supply chain risk management, and his work has been published in reputable journals such as POM and EJOR. Dr. Ghosh has been honored with the Outstanding Service Award by the IEOM Society.
                      </p>
                      ",
                'order_id' => null ,'journal_id' => 5
            ],
            [
                "name" => "Nick Capon",
                "affliation" => "board-member-image/jblm/Portsmouth Business School, University of Portsmouth",

                "country" => "United Kingdom",
                "image" => "13.png",
                "biography" => "
                      <p>
                      Mr Nick Capon, is an Academic Director at the University of Portsmouth on the south coast of UK. The University is ranked third of all modern UK universities for research power in the Times Higher Education UK newspaper's most recent rankings. He works at the Portsmouth Business School, which is accredited as an excellent business school by both the European Foundation for Management Development (EFMD) and AACSB International.
                      </p>
                      <p>
                      Nick keeps in touch with the needs of businesses and adds value to the academic community by supporting research that has a potential impact on businesses' current challenges. He has led the successful winning of £8m innovation funding for his University from different industries.
                      </p>
                      <p>
                      His particular expertise is in the management of risk and quality. He has been commissioned personally to conduct consultancy in 35 companies in the UK and abroad, has taught post-graduates in the far east, Middle East and Europe and has been a trustee of a group of elderly care homes for 9 years.
                      </p>
                      <p>
                      He also has expertise in enterprise. He has started two businesses with a group of colleagues, one charity and one social enterprise, both continuing to grow after 6 years and 4 years, respectively with cumulative turnover so far of £650K. This has given him the opportunity to test the value of theory and how best to apply it in the context of small early-growth organizations.
                      </p>
                      ",
                'order_id' => null ,'journal_id' => 5
            ],
            [
                "name" => "João M. Lopes",
                "affliation" => "Miguel Torga Institute of Higher Education (ISMT), Coimbra and The University of Beira Interior (UBI), Covilhã",

                "country" => "Portugal",
                "image" => "board-member-image/jblm/05.png",
                "biography" => "
                        <p>
                        João M. Lopes holds a Ph.D. in management. Currently, he is an Assistant Professor at the Miguel Torga Institute of Higher Education (ISMT) and University of Beira Interior (UBI), a Scientific Coordinator of Undergraduate Degree in Management (ISMT), and a Researcher at NECE (Research Unit for Business Sciences). Has several publications in journals indexed to WOS and Scopus. Additionally, he is an active editorial board member at several internationally reputed journals. His main research interests include: regional innovation systems, RIS3, smart specialization, artificial intelligence, tourism, strategy, entrepreneurship, marketing, innovation, circular economy, circular entrepreneurship, digital technology in business, environmental and social sustainability, and competitiveness.
                        </p>
                        ",
                'order_id' => null ,'journal_id' => 5
            ],
            [
                "name" => "Georgios Tsourvakas",
                "affliation" => "Department of Business Administration, School of Economic and Political Sciences, National and Kapodistrian University of Athens",

                "country" => "Greece",
                "image" => "board-member-image/jblm/22.png",
                "biography" => "
                          <p>
                          George Tsourvakas, Professor, BA (University of Piraeus), MA (Universities of Hamburg and Stockholm), PhD (Panteion University). He is teaching marketing management, strategic marketing, market research and branding at the Department of Business Administration, School of Economic and Political Sciences, National and Kapodistrian University of Athens. He was a visiting scholar at the Westminster and City Universities. He is the Director of the LAB “Integrated Marketing Communications”. His research has published in leading journals in the field such as Journal of Media Economics, International Journal on Media Management, Journal of Media Business Studies, European Journal of Law and Economics, Journal of Communications, Journal of Radio and Audio Media, Journal of Applied Journalism and Media Studies, Austral Communication, Journal of Non-Profit and Voluntary Sector Marketing, Social Responsibility Journal, International Journal of Technology Marketing, Journal of Product and Brand Management, Newspaper Research Journal, Museum Management and Curatorship. Journal of Political Marketing, Sustainability.
                          </p>
                          ",
                'order_id' => null ,'journal_id' => 5
            ],
            [
                "name" => "Konstantinos I. Stouras",
                "affliation" => "Michael Smurfit Graduate Business School, University College Dublin",

                "country" => "Ireland",
                "image" => "board-member-image/jblm/15.png",
                "biography" => "
                          <p>
                          Konstantinos Stouras is Assistant Professor of Operations Management at UCD, Michael Smurfit Graduate Business School. Konstantinos specializes in technology management and innovation. His research examines crowd-based innovation models, and the impact of on-demand marketplaces and online communities in the digital transformation of the service industry. Konstantinos holds a Ph.D. in Operations Management from INSEAD and graduate degrees in Financial Engineering, and Applied Mathematics and Physics from the National Technical University of Athens (ΕΜΠ).
                          </p>
                          ",
                'order_id' => null ,'journal_id' => 5
            ],
            [
                "name" => "Ren Jing",
                "affliation" => "School of Business, Singapore University of Social Sciences",

                "country" => "Singapore",
                "image" => "board-member-image/jblm/19.png",
                "biography" => "
                            <p>
                            Dr. Ren Jing is currently a Senior Lecturer at the School of Business, Singapore University of Social Sciences, Singapore. She received her B.E. degree in Electronic Engineering from the Hefei University of Technology (China) and her Ph.D. in Information Systems from Singapore Management University. Jing’s research interests include interdisciplinary topics of Applied Artificial Intelligence in Recommendation, Marketing, Social Sciences and FinTech. Jing is a Chartered Fintech Professional. She is also working as an Associate Editor for the journal Electronic Commerce Research and Applications and a regular reviewer for several journals and conferences. Her publications appeared in several Q1 journals and top-tier conferences in the Information Systems and Machine Learning fields.
                            </p>
                            ",
                'order_id' => null ,'journal_id' => 5
            ],
            [
                "name" => "Beldina Owalla",
                "affliation" => "Oxford Brookes University",

                "country" => "United Kingdom",
                "image" => "board-member-image/jblm/14.png",
                "biography" => "
                        <p>
                        Dr Beldina Owalla is currently a Senior Lecturer in Business and Management at Oxford Brookes University. She holds a PhD in Business Administration (Entrepreneurship) from the Stockholm School of Economics, Sweden. Her research falls under the broad theme of inclusive entrepreneurship and adopts an intersectional perspective in understanding the impact of gender and culture on entrepreneurship and innovation activities in different geographical contexts. Her research interests are in the areas of women’s entrepreneurship, entrepreneurial leadership, entrepreneurship education, business innovation, venture finance and SME growth.
                        </p>
                        <p>
                        Beldina has worked on various research projects focused on women’s entrepreneurial identities, diversity and inclusion in business innovation, SME productivity, and community business growth strategies, social deprivation, and women business leaders. She has co-edited a book on Gender, Diversity and Innovation: Concepts, policies and practice, and published journal articles and book chapters in her areas of interest. Prior to joining academia, Beldina worked with the UN Food and Agriculture Organisation, where she was involved in the financial and operational management of various donor-funded projects.
                        </p>
                        ",
                'order_id' => null ,'journal_id' => 5
            ],
            [
                "name" => "Mosab Tabash",
                "affliation" => "MBA Director and Associate Professor of Finance at the College of Business, Al Ain University",

                "country" => "UAE",
                "image" => "board-member-image/jblm/06.png",
                "biography" => "
                        <p>
                        Mosab I. Tabash is currently working as MBA Director and Associate Professor of Finance at the College of Business, Al Ain University, UAE. He obtained his Doctor of Philosophy (Ph.D.) in Finance from the Faculty of Management Studies (FMS Delhi). His research interests include Islamic banking and Finance, monetary policies, corporate governance, financial performance, investments, tourism, and risk management.
                        </p>
                    ",
                'order_id' => null ,'journal_id' => 5
            ],
            [
                "name" => "Xia Chongwu",
                "affliation" => "School of Business, Singapore University of Social Sciences",

                "country" => "Singapore",
                "image" => "board-member-image/jblm/16.png",
                "biography" => "
              <p>
              Dr. Xia Chongwu is currently a senior lecturer at the Singapore University of Social Sciences. He previously held positions as an associate professor of finance (Tenure-track) at the University of Science and Technology of China and an assistant professor of finance at Xiamen University. Dr. Xia holds a Ph.D. in Finance from Nanyang Technological University and has established himself as an accomplished researcher in finance.
              </p>
              <p>
              His impactful research spans corporate finance and ESG, with numerous publications in esteemed journals such as Organization Science, Journal of Business Ethics, Journal of Futures Markets, and Accounting Horizons. Notable awards include the Responsible Research in Management Award in 2023 and the STR Best Paper Award in Stakeholder and Nonmarket Strategy in 2021. Dr. Xia's commitment to advancing knowledge is reflected in his extensive professional services, including serving as an ad-hoc referee for reputable journals. His dedication to responsible and impactful research positions him as a productive scholar and contributor to the global academic community.
              </p>
              ",
                'order_id' => null ,'journal_id' => 5
            ],
            [
                "name" => "Theresa Obuobisa-Darko",
                "affliation" => "Department for the Management Studies in Ghana Communication Technology University, and a former Head of the Human Resource Management Department at Methodist University ",
                "country" => "Ghana",
                "image" => "board-member-image/jblm/07.png",
                "biography" => "
              <p>
              Professor Theresa Obuobisa-Darko is an Associate Professor and currently Head of the Department for Management Studies in Ghana Communication Technology University, and a former Head of the Human Resource Management Department at Methodist University Ghana. Professor  Obuobisa-Darko holds a Doctor of Philosophy in Public Administration and Policy Management, a Master of Philosophy in Public Administration as well as a Masters of Business Administration (Human Resource Management option), all from the University of Ghana. Also, she obtained a Master’s degree in Organizational Development and a Bachelor of Education in Home Economics, both from the University of Cape Coast.
              </p>
              <p>
              Professor Obuobisa-Darko has over thirty (30) years of teaching and research experience in the fields of Human Resource Management, Leadership, Organisational Development, and Public Administration. She has taught at all levels of the educational ladder, from the basic to the tertiary level. Her research interests include leadership in organizations, performance management, employee and career satisfaction, health and safety, employee engagement, and conflict management. Theresa has published in peer-reviewed journals and presented papers at both international and national conferences.
              </p>
              ",
                'order_id' => null ,'journal_id' => 5
            ],
            [
                "name" => "Ronnell D. Dela Rosa",
                "affliation" => "Bataan Peninsula State University",
                "country" => "Philippine",
                "image" => "board-member-image/jblm/01.png",
                'order_id' => null ,'journal_id' => 5,
                'biography' => ""
            ],
            [
                "name" => "Anurag Hazarika",
                "affliation" => "Tezpur University",
                "country" => "India",
                "image" => "board-member-image/jblm/02.png",
                "biography" => "
                 <p>
                 Dr.Anurag Hazarika,M.Com,MBA,PGDCA,PGDRD is currently pursuing his Ph.D from the University of Science and Technology, Meghalaya, India.He has been a teaching faculty of KKHSOU University, Tezpur College Centre for last 6 years teaching Management, Commerce and Economics and previously Guest Faculty at Tezpur Law College,Assam as well.Currently, he is also serving as Guest Faculty of Tezpur University,(A Central University) Assam.He has to his credit about 8 Reference cum Text books on Commerce and Management and has been an Editor and Co editor for about 5 books till now.He has to his credit about 5 research papers in UGC CARELIST Journals and serving as Editorial member for 4 research journals and reviewer board member for about 10 national and international journals till now.He has participated and presented his research papers on USA at Duke University in 2014 and RUDN University, Russia in 2022 as had been speaker for few national and international conferences as well.
                 </p>
                 ",
                'order_id' => null ,'journal_id' => 5
            ],
            [
                "name" => "Juliansyah Noor",
                "affliation" => "La Tansa Mashiro University, Banten",

                "country" => "Indonesia",
                "image" => "board-member-image/jblm/03.png",
                'order_id' => null ,'journal_id' => 5, "biography" => ""
            ],
            [
                "name" => "Mohammad Rashed Hasan Polas",
                "affliation" => "Department of Business Administration Sonargaon University (SU), Dhaka",

                "country" => "Bangladesh",
                "image" => "board-member-image/jblm/04.png",
                "biography" => "
                  <p>
                  Mohammad Rashed Hasan Polas works as a Lecturer and researcher at the Department of Business Administration & CRTC, Sonargaon University (SU), Bangladesh. He is also a PhD candidate in Management at the Centre for Postgraduate Studies, Limkokwing University of Creative Technology, Malaysia. Additionally, he has served as an External Researcher at the Universidad de Lima, Peru. Furthermore, he has worked as an affiliated researcher at the Universidad Católica Los Ángeles de Chimbote, Instituto de Investigación, Chimbote, Peru, and Universidad Católica de Trujillo, Instituto de Investigación, Chimbote, Peru. Moreover, he is the author of several papers in the Journal of Enterprising Communities, Journal of Public Affairs, International Journal of Management Practice, Global Journal of Flexible Systems Management, Environment, Development, and Sustainability, among others. He has participated in several national and international conferences/seminars. Additionally, he is an active editorial board member at several internationally reputed journals. He is currently working as an active Peer Reviewer for Several Renowned Q1 & Q2 Journals (Springer, Emerald, Wiley, Inderscience, and so on.  His research interests include Leadership, entrepreneurship, innovation, ethical decision-making, knowledge management, artificial intelligence, blockchain technology, and sustainability.
                  </p>
                  ",
                'order_id' => null ,'journal_id' => 5
            ],
            [
                "name" => "Fanos Tekelas",
                "affliation" => "University of Central Lancashire Cyprus/ Director of the Centre for Entrepreneurial Development, Alliance and Research (CEDAR)",

                "country" => "Cyprus",
                "image" => "board-member-image/jblm/11.jpg",
                "biography" => '
                <p>
                Dr. Tekelas is a Lecturer in Innovation and Entrepreneurship and the Programme Leader of the MBA programme at UCLan Cyprus. The crux of his research lies in examining the strategic postures of small and medium enterprises and their impact on their performance. Dr. Tekelas’ research interests also focus on entrepreneurial orientation and entrepreneurial behaviour in family firms. Dr Tekelas is a reviewer for the British Food Journal, and he maintains professional memberships in the Regional Studies Association and the Lancashire Institute for Economic and Business Research. He is an HRDA-certified trainer. He is currently representing the Republic of Cyprus as a member of the management committee in the European Cooperation in Science & Technology, Cost Action CA16206: Empowering the next generation of social enterprise scholars. Dr Tekelas has over 16 years of professional experience in small family-owned hotels while he has an established network with a significant number of family-owned hotels in Cyprus. In 2019, Dr Tekelas was appointed as the Director of the Centre for Entrepreneurial Development, Alliance and Research (CEDAR) LTD.
                </p>
                 ',
                'order_id' => null ,'journal_id' => 5
            ],
            [
                "name" => "Karen Cripps",
                "affliation" => "Oxford Brookes Business School",

                "country" => "United Kingdom",
                "image" => "board-member-image/jblm/12.jpg",
                "biography" => '
                <p>
                Dr. Karen Cripps is a Senior Lecturer in Leadership at the Business School, a Subject Coordinator for the Business and Management undergraduate programme, and an advisor for the Senior People Professional Apprenticeship. She is a Senior Fellow of the Higher Education Academy (SFHEA). With a long-established academic and teaching profile in sustainability leadership and management, Karen is committed to supporting student success and developing links to business networks and practice. Her practice is deeply aligned with the United Nations `Principles of Responsible Management Education` (PRME), for which she is the Secretary for PRME UK and Ireland Chapter Steering Committee, a Co-Lead for the London and South East regional network, and an ambassador for PRME Global Sustainability Mindset Working Group.
                </p>
                 ',
                'order_id' => null ,'journal_id' => 5

            ],
            [
                "name" => "Anthony Bagherian",
                "affliation" => "International School of Management (ISM), Paris",

                "country" => "France",
                "image" => "board-member-image/jblm/anthony-bagherian.jpg",
                "biography" => "
                   <p>
                   Dr. Anthony Bagherian is currently working as a Quality manager in the Vectrus System Corporations, Stuttgart, Germany. He has completed his Ph.D. studies at ISM (International School of Management, Paris. He earned both his Bachelor's and Master at Linköping Technical University from Sweden in Quality Management. He has published numerous research articles in various top-ranking journals (Emeralds, Elsevier, Taylor & Francis, Wiley, etc.). He is also a board editor and editor of journals (Elsevier, Springer, MDPI, etc.). His areas of research interest are Six Sigma, operational management, business Statistics, MCDM (Multiple-criteria decision analysis).
                   </p>
                   ",
                'order_id' => null ,'journal_id' => 5
            ],
            [
                "name" => "Nazrul Islam",
                "affliation" => "Department of Business Administration, Northern University Bangladesh",

                "country" => "Bangladesh",
                "image" => "board-member-image/jblm/nazrul-islam.png",
                "biography" => "
                     <p>
                     Nazrul Islam is a professor of Management, HRM and International Business. He is currently serving as the Dean of the School of Business and Pro-Vice Chancellor of Northern University Bangladesh. He began his career in Academia in 1991 at Khulna University in the Discipline of Business Administration. In 2004, he joined BRAC University as an Associate Professor of Management, where he served as the coordinator of ‘Evening Programs’. In 2005, he joined North South University’s School of Business as an Associate Professor. Whilst, working at NSU he also served as an executive editor of ‘North South Business Review’ and worked as an executive secretary for the ‘South Asian Management Forum 2007’ jointly organized by North South University and Association of Management Development Institutions in South Asia (AMDISA). In 2007, he joined East West University as a Professor, where he also served as a Dean of the Faculty of Business and Social Studies, Coordinator of MBA and EMBA programs and the Chief Editor of the Journal of Business and Social Studies. Since 2008, Prof. Islam has served as a Business School Dean at various universities like East West University, State University of Bangladesh, Eastern University, Uttara University and Canadian University of Bangladesh.
                      Prof. Islam has published 62 research articles in international refereed journals that were abstracted and indexed by: Scopus, ABDC, EBSCOhost, ProQuest, ESJI, Crossref and DOI. Prof. Islam has also published 29 research papers in local refereed journals and attended more than 20 International Conferences held in India, Nepal, Maldives, Hong Kong, South Korea, Malaysia, Thailand, Singapore, USA, and Australia

                     </p>
                     ",
                'order_id' => null ,'journal_id' => 5
            ],
            [
                "name" => "Alla Ozeran",
                "affliation" => "Department of Business Administration, Tallinn University of Technology",

                "country" => "Estonia",
                "image" => "board-member-image/jblm/alla-ozeran.jpg",
                "biography" => "
                       <p>
                       Prof. Alla Ozeran is currently a postdoctoral researcher in the Department of Business Administration at Tallinn University of Technology.
                       In 1996, she graduated from the Lviv Commercial Academy (Ukraine) with a degree in 'Finance and Credit' and received a specialist diploma with honors.
                       The experience of working and teaching in institutions of higher education is 22 years. Until September 2023, she worked as a professor at the Department of Accounting and Consulting at the Kyiv National University of Economics. Since October 2023, she has been working as a postdoctoral researcher at Tallinn University of Technology.
                       She has been working in the field of accounting and auditing for more than 20 years. She has considerable experience in providing auditing and consulting services to Ukrainian and international companies, banking and other institutions operating in the financial services market.
                       She repeatedly took part in scientific projects of the Academy of Financial Management, where she worked on topics commissioned by the Ministry of Finance of Ukraine.
                       Key scientific interests include: financial and non-financial reporting of enterprises
                       </p>
                       ",
                'order_id' => null ,'journal_id' => 5
            ],
            [
                "name" => "Tiiu Kamdron",
                "affliation" => "School of Business and Governance, Tallinn University of Technology",

                "country" => "Estonia",
                "image" => "board-member-image/jblm/tiiu-kamdron.jpg",
                "biography" => "
                         <p>
                         Dr. Tiiu Kamdron, graduated from high school in 1971 and I started studying psychology at the University of Tartu in the same year. She received her master's degree in social psychology in 1993 from Tallinn University and a doctorate in Public Administration in 2003 from Tallinn University of Technology. Dr. Kamdron’s doctoral dissertation dealt with the topic of work motivation of senior civil servants. She have been teaching at Tallinn University of Technology since 1992, mainly organization theory and psychology and social psychology. Since 2012, she has mainly taught team work and group processes, employee counselling, work motivation and payment in the syllabus of the master's program in human resource management, and she is also responsible for the subject of master's seminar. She also taught at Pärnu College of the University of Tartu in the years 2011-2015. She has supervised 78 master's theses and 92 bachelor's theses over the years. Her interests are primary work motivation, work engagement, job crafting, well-being at work, team processes and leadership. She has published 31 articles and one monograph in categories 1.2; 1.3; 2.2; 3.4 and 5.2. Dr Kamdron belongs to EGAS (Estonian Group Analytic Society) and She is the representative of Estonia in the EFPP organization (European Federation of Psychoanalytic Psychotherapy).
                         </p>
                         ",
                'order_id' => null ,'journal_id' => 5
            ],
            [
                "name" => "Andreas E. Fousteris",
                "affliation" => "Department of Business Administration, University of Piraeus, Piraeus",

                "country" => "Greece",
                "image" => "board-member-image/jblm/Andreas-E-Fousteris.jpg",
                "biography" => "
                           <p>
                           Dr. Andreas Fousteris is Assistant Professor in the Department of Business Administration at the University of Piraeus.
                          Holds a Bachelor’s Degree in Economics from the University of Piraeus, a MSc in Management of Industrial Systems with specialization in Energy & Environmental Management from National Technical University of Athens & University of Piraeus, an Executive MBA from the University of Piraeus, and a PhD in Business Administration from the University of Piraeus. He is also Qualified Chartered Accountant (ACCA).
                          With almost two decades of professional experience in private sector, Dr. Andreas Fousteris has held managerial positions in the financial sector, consulting sector, as well as in group active in infrastructure, renewable energy, concessions, and real estate development, with main areas of responsibility being finance, information systems, business planning, business transformation, strategy, and procurement management.
                          His current academic and research interests focus on Economic Analysis, Public Economics, Environmental & Energy Management, Technology & Innovation Management, Business Plans Preparation & Feasibility Studies, Corporate Governance, Sustainable Development and Entrepreneurship.

                           </p>
                           ",
                'order_id' => null ,'journal_id' => 5
            ],
            [
                "name" => "Mohammad Shamsul Hoque",
                "affliation" => "The Centre for Higher Studies and Research, Bangladesh University of Professionals",

                "country" => "Bangladesh",
                "image" => "board-member-image/jblm/mohammad-shamsul-hoque.jpg",
                "biography" => "
                           <p>
                          Dr. Mohammad Shamsul Hoque did his Ph.D. on ‘Women Empowerment Through Entrepreneurship Development in Bangladesh’ from the Centre for Higher Studies and Research, Bangladesh University of Professionals. He has published several papers in internationally renowned journals on women's leadership and entrepreneurship development. He has 20 years of experience. Dr. Hoque has been working as Country Program Lead, Gender Equality and Returns (GEAR) Program, and Senior Enterprise Advisor with the International Labour Organization since 2014. His key expertise includes project development, program management, and research in the areas of manufacturing business, SMEs and private sector development, women’s leadership, career advancement, economic empowerment, industrial relations, social compliance, labour practices, skills development, lean and workforce productivity, and care economy. He worked for CARE International, Marie Stopes International, and the Ministry of Education. He completed at least five successful research projects on women's leadership development, gender equality, social and labor standards, and social protection. His major fields of interest are Economics, Entrepreneurship, Leadership, Women's Economic Empowerment, Management, Private Sector Development, Labour Practices, and Human Rights
                           </p>
                           ",
                'order_id' => null ,'journal_id' => 5
            ],
            //rer
            [
                "name" => "Sara Mashayekh",
                "affliation" => "School Of Education Arts, Design And Architecture University Of New South Wales Sydney",

                "country" => "Australia",
                "image" => "board-member-image/rer/05.png",
                "biography" => "
                <p>
                Dr. Sara Mashayekh is a lecturer and researcher specializing in education, educational technology, pedagogical tasks, and formative assessment at the University of New South Wales (UNSW). In addition to her roles in teaching and research, Dr. Sara has held pivotal positions as a project manager and learning designer for various university initiatives. Her influence extends globally, having been invited to speak and present at renowned international conferences, where her insights and research findings have earned acclaim.
                </p>
                ",
                'order_id' => null ,'journal_id' => 6
            ],
            [
                "name" => "Murali Raman",
                "affliation" => "Deputy Vice Chancellor, Director Postgraduate & Continuing Education Asia Pacific University",

                "country" => "Malaysia",
                "image" => "board-member-image/rer/02.png",
                "biography" => "
                 <p>
                 Professor Ts. Dr. Murali Raman is both a Rhodes Scholar and Fulbright fellow. His academic credentials include a Phd from SISAT, Claremont, USA; MBA (Imperial College, London); MSc Human Resources (London School of Economics, UK).
                 </p>
                 <p>
                 With his research team, Dr. Murali and his team has secured close to RM1.5Million in grant funding over the last five years. He as affiliated to Stanford’s Technology Venture Program as a Faculty Fellow- where he has had and continue to discuss issues surrounding creating a vibrant entrepreneurship ecosystem and application of innovative thinking via Design-Principles in Malaysia.  He is a Stanford certified Design Thinker.
                 </p>
                 <p>
                 Prof Murali Raman is also certified in Neuro Linguistic Programming (NLP) – 2016 as an NLP Certified Practitioner. He is also a Certified Trainer in Colored Brain Communication and Emotional Drivers based on Directive Communication Psychology.  He is also a Fellow with the Malaysian Institute of Management (MIM).
                 </p>
                 <p>
                 Throughout his career in the corporate and academic sector, Prof. Murali has managed, led and director numerous programmes in relation to digital transformation. With Accenture Consulting he managed a total of nine [9] projects of which three were in Singapore with Tier 1 clients.
                 </p>
                 <p>
                Prof Murali continues to consult and assists corporations to transform digitally, using design thinking and business model canvassing ideals.  In recognition of his leadership Prof Murali has received several accolades at the International level. Examples are:
                 </p>
                 <ul class='points'>
                 <li>European Champion for Knowledge Management Systems, 2019, Lisbon Portugal</li>
                 <li>Outstanding Academic Leadership Award in Malaysia – 2016 EDUCOOP for IT Management</li>
                 <li>   Innovation Gold Medallist, iCAN, Canada, 2019</li>
                  <li>  Innovation Gold Medallist for 21st Century Teaching, 2019, Sri Lanka </li>
                   <li> World Innovation Award – Seoul, Korea – 2015</li>
                   <li> Augerah Pecipta Negara – Gold Medal</li>
                   <li> Golden Globe Tiger Awards – For Outstanding Academic Leadership </li>
                 </ul>
                 <p>
                 He has published more than 80 papers in International Journals, Conferences, and Book Chapters. He was appointed as a lead consultant and author of Malaysia’s Social Innovation Roadmap, by Yayasan Inovasi under MOSTI. He also serves as the CEO of an NGO called Sathya Sai Academy for Human Values—an academy focussed on promoting human values-based education in Malaysia. He also serves as a Board member of the Malaysian Private Education Cooperative (EDUCOOP).
                 </p>
                 <p>
                 He continues to do research, train and teach in areas such as digital business transformation, design thinking and applications of IT in organisations.
                 </p>
                 ",
                'order_id' => null ,'journal_id' => 6
            ],
            [
                "name" => "Hassan Muhammad Abdel Maqsoud",
                "affliation" => "Professor of Arabic Language and Applied Linguistics at the Faculty of Education, Ain Shams University",

                "country" => "Egypt",
                "image" => "board-member-image/rer/11.png",
                "biography" => "
                  <p>
                  Prof. Hassan Muhammad Abdel Maqsoud obtained a PhD in the Arabic language in 1997. He began teaching at Ain Shams University in 2002, then worked in the Sultanate of Brunei Darussalam until 2011, and has been working at Ain Shams University since then.
                  Prof. Maqsoud has completed thirty research papers on teaching Arabic to non-Arabic speakers, approximating Herrtage grammar and Qur’anic studies.
                  </p>
                  <p>
                  Recent Publication: His most recent book is the 'Watch and Learn' series on teaching Arabic to non-native speakers, consisting of nine parts, published in 2023.
                  </p>
                  ",
                'order_id' => null ,'journal_id' => 6
            ],
            [
                "name" => "Elisavet Lazarakou",
                "affliation" => "Department of Pedagogy and Primary Education of the National and Kapodistrian University of Athens",

                "country" => "Greece",
                "image" => "board-member-image/rer/12.png",
                "biography" => "
                  <p>
                  Elisavet Lazarakou is an Assistant Professor at the Department of Pedagogy and Primary Education of the National and Kapodistrian University of Athens in the academic subject 'Assessment of the learning process: pedagogical-teaching approach'. She is also a Member of the Collaborating Teaching Staff of the Hellenic Open University for teaching the annual course 'Introduction to Adult Education.' She holds a Ph.D. and an M.Ed. in Pedagogy from the National and Kapodistrian University of Athens. She has taught in numerous undergraduate and postgraduate programs and participated in training seminars and European projects for primary and secondary school teachers. Her research interests focus on classroom assessment, teacher education, curriculum design and development, and adult education. She has worked as a researcher in several research projects funded by European and national agencies. Also, author of a book, several collective-volume chapters, papers in Greek and English journals and announcements at scientific conferences.
                  </p>
                  ",
                'order_id' => null ,'journal_id' => 6

            ],
            [
                "name" => "Pongkit Ekvitayavetchanukul",
                "affliation" => "The Board of Khon Kaen University Affairs, Khon Kaen University",

                "country" => "Thailand",
                "image" => "board-member-image/rer/03.png",
                "biography" => "
                 <p>
                Dedicated to enhancing global education, Dr. Pongkit Ekvitayavetchanukul has been deeply committed to improving the quality of life through expanded access to learning opportunities. His passion spans both conventional and special education. He has actively contributed to pioneering initiatives like the competency-based curriculum.
                 </p>
                 <p>
                His journey in education includes spearheading innovative developments such as the establishment of a distance learning center, the implementation of an Elearning system, and fostering international collaborations with renowned universities. These endeavors aimed to create new avenues for students to engage in continuous education and broaden their horizons.
                 </p>
                 <p>
                  AWARDS:
                 </p>
                 <ul class='points'>
                 <li>Honors Military Court Expert 2023</li>
                 <li>Diamond Award for Innovator 2022</li>
                 <li>Outstanding Educational Institution Administrator 2020 </li>
                 </ul>
              ",
                'order_id' => null ,'journal_id' => 6
            ],
            [
                "name" => "Maria Morena Enage-Dela Pena",
                "affliation" => "Biliran Province State University",

                "country" => "Philippines",
                "image" => "board-member-image/rer/04.png",
                "biography" => "
                  <p>
                  Associate Professor Maria Morena Enage-Dela Peña has been actively engaged in various leadership roles within the field of education and academia. As a dedicated member of the CHED Regional Quality Assessment Team (RQAT), focusing on Humanities, Social Sciences, and Communication, Dr Maria Morena has been contributing to quality assessment initiatives since September 18, 2018, to the present.
                  Currently serving as the Chairperson of the School of Graduate Studies-MAED Program (All Specializations) at Biliran Province State University since September 13, 2022, Prof. Maria Morena oversees the academic and administrative aspects of the program.
                  With a keen focus on program compliance and curriculum development, Prof. Maria Morena has been actively involved in various roles. As the Chair of the Eligibility and Curriculum Application for Certificate of Program Compliance (COPC) of the MAED Program at BiPSU School of Graduate Studies since September 11, 2023, Prof. Maria Morena plays a pivotal role in ensuring program adherence to established standards.
                  </p>
                  <p>
                  Prof. Maria Morena previously held the position of Director of the Academic Related Services Office at Biliran Province State University from August 2017 to July 2021, showcasing commitment to administrative responsibilities.
                  </p>
               ",
                'order_id' => null ,'journal_id' => 6
            ],
            [
                "name" => "Omar Trabelsi",
                "affliation" => "University of Jendouba",

                "country" => "Tunisia",
                "image" => "board-member-image/rer/06.png",
                "biography" => "
                      <p>
                      Dr. Omar Trabelsi, a Sports Science Ph.D. specializing in sports pedagogy and didactics, graduated from the University of Sfax, Tunisia, in 2021. Currently serving as an Assistant Professor at the High Institute of Sports and Physical Education of Kef, University of Jendouba, Tunisia, Dr. Trabelsi is also a respected researcher at the National Observatory of Sport in Tunis, Tunisia. His research centers on integrating educational technology to enhance multifaceted learning in sports and physical education. Driven by a keen interest in advancing teacher education in sports, he actively explores technology-mediated pedagogies to enrich the educational landscape further.
                      </p>
                   ",
                'order_id' => null ,'journal_id' => 6
            ],
            [
                "name" => "Mohsen Hamed Farrag Abdel Aal",
                "affliation" => "Professor of Curriculum and Instructions at the Faculty of Education, Ain Shams University",

                "country" => "Egypt",
                "image" => "board-member-image/rer/09.png",
                "biography" => "
                          <p>
                          Professor Mohsen Farrag is a distinguished academic leader with over three decades of experience in education and curriculum development. He has served on the Permanent Scientific Committee for the promotion of associate Professors in Curricula Specializations and led the curriculum and instructions department at Ain Shams University during the critical pandemic period. Prof. Farrag is renowned for his editorial contributions to fifteen specialized journals and his role in various committees, including those at Qassim University in Saudi Arabia. His international collaboration with UNESCO and FAO underscores his commitment to educational excellence. Prof. Farrag's extensive teaching and training experience, coupled with his supervision of over 90 master's and doctoral theses, reflects his dedication to nurturing future educators. Additionally, his scholarly publications, including books and research papers, demonstrate his profound impact on education research and practice worldwide.
                          </p>
                       ",
                'order_id' => null ,'journal_id' => 6
            ],
            [
                "name" => "Fatma Elzhraa Salem Mahmoud Mostafa",
                "affliation" => "Faculty of Education, Ain Shams University",

                "country" => "Egypt",
                "image" => "board-member-image/rer/10.png",
                "biography" => "
                            <p>
                            Prof. Fatima Al-Zahraa Saleem Mahmoud is a distinguished professor of Educational Principles at Ain Shams University, Egypt. With a wealth of experience, she has served on numerous prestigious committees, including the Supreme Council for Culture and the Promotion Committee for Professors. As an active member of various scholarly associations both in Egypt and abroad, she contributes significantly to educational research and development. With a doctorate in Educational Principles and a background in English language studies, she is also a certified trainer at the Professional Teachers' Academy, Ministry of Education. Prof. Fatima is known for her expertise in philosophical and social foundations of education, and she has conducted training programs internationally, enriching the academic community with her insights. Based in Cairo, Egypt, she continues to make valuable contributions to the field of education.
                            </p>
                         ",
                'order_id' => null ,'journal_id' => 6
            ],
            [
                "name" => "Iqra Munaf",
                "affliation" => "Department of Social Sciences, University of Karachi",

                "country" => "Pakistan",
                "image" => "board-member-image/rer/01.png",
                "biography" => "",
                // <b> Xinqing Xiao </b> is associate professor in China Agricultural University. He has made innovative contributions in the fields of smart sensing, flexible electronics, self-powered sensing, battery-free sensing, smart agriculture, food monitoring. In the past five years, he has presided over and completed the National Natural Science Foundation Youth Program, the national key research and development international cooperation science and technology innovation project, the China Post doctoral Science Foundation projects and the provincial and ministerial key laboratory open projects. He has published more than 60 academic papers in domestic and foreign journals, and accumulated rich research experience
                //  </p>"

                'order_id' => null ,'journal_id' => 6
            ],
            [
                "name" => "Marci H Levine",
                "affliation" => "New York University College",

                "country" => "United States",
                "image" => "board-member-image/rer/08.png",
                "biography" => "
                <p>
                Dr. Levine is a clinician, researcher, educator, and mentor.  She is a Clinical Associate Professor in the Department of Oral and Maxillofacial Surgery at the New York University College of Dentistry.  She is board-certified in oral and maxillofacial surgery and practices at the NYU Dental Faculty Practice.  Dr. Levine's research activities and educational projects focus on the application of modern technology to enhance student learning and improve patient safety.  She is active in the Academy of Distinguished Educators and Omicron Kappa Upsilon, the national dental honor society.  Dr. Levine has received numerous honors and awards for her virtual reality simulation for local anesthesia education.  In 2023, she won the Excellence in Education Innovation Award at NYU-Dentistry and has earned several grants related to teaching and curriculum development.  In 2023 Dr. Levine was the first NYU dental school faculty member to become a 19 Washington Square North Fellow for her research collaboration with faculty at NYU-Abu Dhabi.
                </p>
                 ",
                'order_id' => null ,'journal_id' => 6
            ],
            [
                "name" => "Christos Parthenis",
                "affliation" => "Pedagogical Department of Secondary Education, University of Athens",

                "country" => "Greece",
                "image" => "board-member-image/rer/09.jpg",
                "biography" => '
                <p>
                Dr. Christos Parthenis is an Associate Professor in the Pedagogical Department of Secondary Education with the subject of "Intercultural education: Epistemological assumptions and educational practice". He is also the Director of the Intercultural Education Laboratory of the University of Athens. Since 2020, he is the Scientific Manager of the Educational-Research Program "Integration and Education of Roma Children", which is implemented by the Laboratory of Intercultural Education, of the Philosophy School of the University of Athens. He has been the Project manager and lead researcher in the research entitled "University of Athens Research on Early Childhood and the Inclusion of Roma Families in Greece" within the Early Childhood Program (ECP) of the Open Society Foundation (OSF), between 2017- 2019, and Scientific Head of the Educational-Research Program "Integration and Education of Roma Children", implemented by the Center for Intercultural Education, of the Philosophy School of the University of Athens, during the period 2016-2018. X. Parthenis has completed his circular studies at the Department of Sociology of the University of Gothenburg, Sweden, delivering a thesis on "Social and economic integration of immigrants in Sweden" (1992, University of Gothenburg, Sweden), at the Department of Pedagogy of the University of Gothenburg of Sweden, with a Bachelor`s thesis "The National Identity of the Children of Greek Immigrants" (1993, University of Gothenburg, Sweden) and at the Department of Methodology, History and Theory of Science of the University of Gothenburg, Sweden, with a Bachelor`s thesis "The Symbolic Interaction" (1995, University of Gothenburg, Sweden).
                </p>
                <p>
                He has completed MSc in Social Science and Research Methodology at the Department of Methodology, History and Theory of Science, University of Gothenburg, Sweden. He holds a PhD in Intercultural Education (dissertation title: "The effect of constructivism on education - comparison of intervention schools in the Program: "Education of Returned and Foreign Students" and normal public schools") of the University of Athens. The main research and scientific interests of X. Parthenis concern the formation of a cross-cultural methodology and approach that governs all curricular courses and activities, enriching and upgrading curricula, pedagogic methodology, teaching aids and teaching materials, developing methods of conflict resolution and intercultural  socialization and the inclusion of foreign children in the educational process, the training of teachers and education executives, as well as bilingual teachers, the strengthening of the emotional capital of teachers and the teaching tooling of other forms of intelligence, the development of the critical dimension of education , the cultivation of the students ability to switch between prisms and codes as well as to understand and enjoy various manifestations of the complex cultural phenomenon, through their active engagement with it, the information, awareness and cooperation of the stakeholders of the educational community and the support of activities that promote intercultural communication, the improvement of the institutional framework for the implementation of the intercultural approach in education, the formation of infrastructures for the documentation and dissemination of information. Based on these interests he has a number of publications and publications internationally.
                </p>
                 ',
                'order_id' => null ,'journal_id' => 6
            ],
            //pb
            [
                "name" => "Tejraj M. Aminabhavi",
                "affliation" => "University of Texas at Austin, Texas",

                "country" => "USA",
                "image" => "board-member-image/rer/01.png",
                "biography" => "
                 <h5>Awards (National/International)/Recognitions:</h5>
                 <ul class='points'>
                 <li> World ranked 548 for the year 2023 D-Index 105; India ranked #2 </li>
                 <li> Dr. Raja Ramanna State Award for Scientists </li>
                 <li> The 18th Nikkei Asia Prize, Tokyo, Japan </li>
                 <li> Laureate of 22nd  Kwarizmi International Award (KIA) </li>
                 <li> CIPET Award for Research in Polymer Science and Technology </li>
                 </ul>
                <p>
                Dr. T. M. Aminabhavi, a distinguished academic, served as the Founder Director of the Center of Excellence in Polymer Science at Karnatak University, Dharwad. With roles ranging from Professor of Physical Chemistry to academic leadership, he has significantly contributed to polymer science, physical chemistry, and environmental engineering. His recent assignments include membership in the CEFIPRA - IRC Committee and the CSIR Research Funding Committee. Internationally engaged, he holds a Visiting Adjunct Professorship at Korea University and has collaborated with institutions across France, China, the USA, and more. In addition to academia, Dr. Aminabhavi has consulted for renowned organizations like Paul Hastings and Reliance Life Sciences. His extensive research spans materials for energy, membranes, pharmacy, and theoretical studies, reflecting in numerous patents and scholarly publications. As Founder President of the Society for Polymer Science, India, and Chairman of the Scientific Advisory Board at SDPC, Surat, Dr. Aminabhavi has demonstrated leadership in advancing knowledge and addressing environmental challenges.
                </p>
                 ",
                'order_id' => null ,'journal_id' => 7
            ],
            [
                "name" => "Ahmed Elsonbaty",
                "affliation" => "Egyptian Russian University",

                "country" => "Egypt",
                "image" => "board-member-image/pb/03.png",
                "biography" => "
                 <p>
                 Ahmed Elsonbaty is a seasoned pharmaceutical chemistry researcher with over six years of extensive experience in pharmaceutical analytical chemistry research. Since 2017, Elsonbaty has been actively engaged as a researcher and lecturer at the Faculty of Pharmacy, Egyptian Russian University. His notable contributions include numerous research publications in esteemed journals.
                 </p>
                 <p>
                Dr. Elsonbaty earned his Doctorate in Pharmaceutical Chemistry from Suez Canal University in 2024, following the successful completion of a Master of Science in Pharmaceutical Analysis from Zagazig University's Faculty of Pharmacy in Egypt in 2022. His academic journey commenced with a Bachelor of Science in Pharmaceutical Sciences from the Faculty of Pharmacy at Ain-Shams University in Egypt in 2016.
                 </p>
                 <p>
                 The overarching objective guiding Dr. Elsonbaty's professional endeavors is the enhancement of research quality through the implementation of advanced pharmaceutical analysis procedures. His research specifically concentrates on the application of cutting-edge advancements in green analytical material science and computational chemistry techniques, encompassing Computational Modeling and Simulation of Molecular Spectroscopy and Reactivity, Quantum Chemistry, and Molecular Modeling, within the domain of pharmaceutical analysis.
                 </p>
                 <p>
                 Dr. Elsonbaty has demonstrated his scholarly prowess through the publication of several research papers, delving into diverse topics such as spectroscopy, chromatography, and electrochemical sensors. Of particular significance is the integration of computational studies, illustrating the implications and applications of these methodologies in pharmaceutical mixtures and biological samples.
                 </p>
                  ",
                'order_id' => null ,'journal_id' => 7
            ],
            [
                "name" => "David Dworaczyk",
                "affliation" => "Bryn Pharma, LLC. North Carolina",

                "country" => "USA",
                "image" => "board-member-image/pb/05.png",
                "biography" => "
                 <p>
                 Dr. David Dworaczyk is a seasoned executive with extensive experience in the pharmaceutical and healthcare industry. Currently serving as the CEO and Head of R&D, Regulatory, and Production at Bryn Pharma, LLC since 2018, Dr. Dworaczyk played a pivotal role in establishing the corporate legal entity, developing governance processes, and fostering a collaborative team to drive corporate success. Under his leadership, the company secured approximately $125MM in non-institutional funding and formulated a robust business growth strategy.
                 </p>
                 <p>
                 Dr. Dworaczyk led Bryn Pharma in implementing financial and operational infrastructure for the successful development and pre-commercialization of their lead drug product. His adept leadership in team building, strategic funding, and FDA/regulatory strategy has positioned Bryn Pharma for continued success.
                 </p>
                  ",
                'order_id' => null ,'journal_id' => 7
            ],
            [
                "name" => "Khaled Attala",
                "affliation" => "Faculty of Pharmacy, Egyptian Russian University",

                "country" => "Egypt",
                "image" => "board-member-image/pb/04.png",
                "biography" => "
                 <p>
                 Dr. Khaled Attala is a pharmaceutical chemistry researcher with over six years of experience in pharmaceutical analytical chemistry. He is currently a researcher and assistant lecturer at the Faculty of Pharmacy, Egyptian Russian University, where he has worked since 2017. He has authored and co-authored many research articles in reputable journals. He holds an MSc in Pharmaceutical Analysis from the Faculty of Pharmacy, Zagazig University, Egypt, which he obtained in 2021. He also graduated with a BSc in Pharmacy from the Faculty of Pharmacy, Ain-Shams University, Egypt 2016. His long-term goal is to enhance the quality of research by applying more advanced methodologies in pharmaceutical analysis. His research interests include integrating the latest technologies in material science and computational chemistry into pharmaceutical analysis.
                 </p>
                  ",
                'order_id' => null ,'journal_id' => 7
            ],
            [
                "name" => "Wu Nan",
                "affliation" => "General Manager, Research & Development, Haisco Pharmaceutical Group Co Ltd",

                "country" => "China",
                "image" => "board-member-image/pb/02.png",
                "biography" => "
                   <p>
                 Miss Wu Nan was born on July 7, 1982, and got her PhD in Phytology from Northeast Forestry University in July 2013.
                   </p>
                   <p>
                   Dr. Wu has more than 12 years of experience in pharmaceutical scientific research and participated in the development of more than 10 domestic small molecule new drugs, three of them have been approved for market launching.
                   </p>
                   <p>
                   Dr. Wu joined Haisco Pharmaceutical Group Company Ltd since 2017, titled as the Vice General Manager of Haisco Group, is responsible for the general management of R&D, marketing &sales, and human resources. She built and sharpened a clinical team for innovative drugs at Haisco, and established a core technology system that runs through the entire process of drug development for the company. She optimized and expanded the R&D pipeline of innovative drugs, creating multiple leading technology platforms. She has driven dozens of preclinical candidate compounds to enter the clinical stages of Phase I, II, and III and led the team to complete multiple NDA filings for innovative new drugs.
                   </p>
                    ",
                'order_id' => null ,'journal_id' => 7
            ],
            [
                "name" => "Mostafa Abbas Mostafa Shalaby",
                "affliation" => "Professor of Pharmacology and previous Head of the Pharmacology  Department, Faculty of Vet. Med., Cairo University,Giza",

                "country" => "Egypt",
                "image" => "board-member-image/pb/06.png",
                "biography" => "
                     <p>
                     Dr. Mostafa Abbas Mostafa Shalaby, a distinguished academician in the field of pharmacology, has had a prolific career spanning several decades:
                     </p>
                     <p>
                     <b>Assistant Lecturer:</b> Progressed to the role of Assistant Lecturer, showcasing early excellence in teaching and research.
                     </p>
                     <p>
                     <b>Lecturer:</b> Promoted to the position of Lecturer, contributing significantly to the academic environment.
                     </p>
                     <p>
                     <b>Assistant Professor:</b> Elevated to Assistant Professor, demonstrating expertise and commitment to pharmacology education.
                     </p>
                     <p>
                     <b>Professor:</b> Attained the esteemed position of Professor, leaving a lasting impact on students and colleagues.
                     </p>
                     <p>
                     <b>Head of Pharmacology Department:</b> Led the Pharmacology Department, demonstrating administrative and leadership skills.
                     </p>
                     <p>
                     <b>Council Memberships:</b> Served as a member of the Council of the Faculty of Veterinary Medicine, Cairo University, contributing to institutional development.
                     </p>
                     <p>
                     <b>Committee Memberships:</b> Active participant in various committees, including the Food and Drug Analysis Center and the Permanent Scientific Committee of Pharmacology and Forensic Medicine.
                     </p>
                     <p>
                     <b>Veterinary Medical Syndicate Membership:</b> Holds membership (Number 3328) in the Veterinary Medical Syndicate, Egypt.
                     </p>
                     <p>
                     Dr. Shalaby has left an indelible mark on the field of pharmacology through a career marked by excellence in teaching, research, and institutional service.
                     </p>
                      ",
                'order_id' => null ,'journal_id' => 7
            ],
            [
                "name" => "Eman Gamal Eldin Helal",
                "affliation" => "Al-Azhar Scientific Medical Society, faculty of medicine, Al-Azhar University",

                "country" => "Egypt",
                "image" => "board-member-image/pb/07.jpg",
                "biography" => "
                     <p>
                     Dr. Eman Gamal El-Din Ezzat Helal is a Professor at Al Azhar University, Cairo, Egypt, with vast teaching experience in hematology, comparative physiology, and biochemistry. Holding a Ph.D. in Physiology, her research focused on mineralocorticoid activity in young chickens. Over her career, she has held positions from Demonstrator to Professor, contributing to the field. Prof. Helal is a member of esteemed societies including the Egyptian German Society and the Egyptian Society of Physiology, reflecting her dedication to advancing scientific knowledge.
                     </p>

                      ",
                'order_id' => null ,'journal_id' => 7
            ],
            [
                "name" => "Elvis Ofori Ameyaw ",
                "affliation" => "Dean, School of Pharmacy and Pharmaceutical Sciences University of Cape Coast. Cape Coast.",

                "country" => "Ghana",
                "image" => "board-member-image/pb/08.jpg",
                "biography" => "
                     <p>
                     Dr. Elvis Ofori Ameyaw is a Ghanaian working at the University of Cape Coast as a Professor of Pharmacology. He is the Dean of the School of Pharmacy and Pharmaceutical Sciences, College of Health and Allied Sciences (CoHAS), UCC.
                        He obtained his Bachelor of Pharmacy Degree and PhD in Pharmacology, both from the Kwame Nkrumah University of Science and Technology, Kumasi. He further proceeded to the University of Georgia, Athens, USA, as a Fulbright Research Scholar for his Fellowship in the area of Natural Product Drug Discovery.
                     </p>
                     <p>
                     He is a Pharmacist and a Fellow of the Ghana College of Pharmacists and has assisted in training several pharmacists in the country. He has developed a research niche in Central Nervous System Pharmacology.
                     </p>

                      ",
                'order_id' => null ,'journal_id' => 7
            ],
            [
                "name" => "Prachi Srivastava",
                "affliation" => "AMITY Institute of Biotechnology, AMITY University, Lucknow ",

                "country" => "India",
                "image" => "board-member-image/pb/09.jpg",
                "biography" => "
                     <p>
                     Dr. Prachi Srivastava is an Associate Professor at Amity Institute of Biotechnology – Amity University, Uttar Pradesh, Lucknow. She completed her master’s from Lucknow University in Zoology in 1995. Her research was under a collaborative project of IITR and KGMU Lucknow in the area of Eales’ Disease Diabetic Retinopathy and Uveitis. Later, she was awarded her doctorate from Lucknow University in 2004. She developed platelets as a model system for oxidative stress studies against ‘retinal disorders’.
                    She has made significant research contributions in bioinformatics, under which she focused on Gene identifications, High throughput analysis to protein structure predictions as well as virtual screening to identify the potentiality of herbal molecules.
                    She is also working in the area of microarray data analysis of selected disorders as well as unique database designing and development. OcularInformatics and Neuroinformatics are her key areas of interest. She has predicted ‘different structures of ocular and neural proteins along with their characterization and docking studies of different herbal molecules.’ Beyond this, she is also working in filariasis and other allied branches of computational biology.
                    She has presented papers in national and international forums & conferences; is recognized by journals of high repute as she has seventy-four publications and more than a hundred of her abstracts to her credit.
                    In addition to presenting her research, she has actively organized many national and international conferences, seminars, training programs, and FDP. She has also chaired many national and international sessions of conferences as well as delivered talks and guest lectures at different national and international scientific forums and academic platforms.
                     </p>
                      ",
                'order_id' => null ,'journal_id' => 7
            ],
            //msr
            [
                "name" => "Naomi Kaduwela",
                "affliation" => "Head of Kavi Labs, Kavi Global, Barrington",

                "country" => "United States",
                "image" => "board-member-image/msr/03.png",
                "biography" => "
              <p>
              Naomi is the Head of Kavi Labs, the innovation and incubation arm of Kavi Global. At Kavi Labs, she partners with clients and research institutions to co-create exciting new analytical solutions by utilizing emerging technologies. She is skilled at using technology such as machine learning, artificial intelligence, and computer vision to design innovative products with a user-centric focus that delights users.
              She also has 4 research publications in scientific journals. She is a founding member of the board of Springer’s AI Ethics Scientific Journal.
              </p>
              ",
                'order_id' => null ,'journal_id' => 8
            ],
            [
                "name" => "Ke Chen",
                "affliation" => "Professor at University of Strathclyde and Honorary Professor at University of Liverpool",

                "country" => "United Kingdom",
                "image" => "board-member-image/msr/04.png",
                "biography" => "
              <p>
              Prof Chen is the Chair of the Department of Mathematics and Statistics and a Professor in Numerical Analysis at the University of Strathclyde. He is an Honorary Clinical Consultant at Clatterbridge Cancer Centre and also an Honorary Professor at the University of Liverpool, where he is the director of the Centre for Mathematical Imaging Techniques. For the past 20 years, his group developed a range of novel models for analyzing various problems across image modalities. The concerned medical problems conclude both preclinical and clinical imaging. Merging the advantages of AI and mathematical techniques is a special expertise and a major focus of research.  Tackling problems in cutting-edge medical sciences and healthcare to collaborate with and assist practitioners is his group’s priority.
              </p>",
                'order_id' => null ,'journal_id' => 8
            ],
            [
                "name" => "Chen Zhao",
                "affliation" => "Project Scientist Cancer Center, Renmin Hospital of Wuhan University Wuhan",

                "country" => "China",
                "image" => "board-member-image/msr/10.png",
                "biography" => "
                <p>
                Dr. Chen Zhao is an accomplished attending physician with a distinguished career spanning six years in the field of clinical oncology. His academic journey began with a strong foundation in medicine, leading to his attainment of a medical degree at Wuhan University, China. Dr. Zhao's commitment to advancing medical knowledge and contributing to the field has been a driving force throughout his career.
              Currently serving as a project scientist alongside Renmin Hospital of Wuhan University in China, as well as a Postdoc researcher at UCLA in the USA, Dr. Zhao has actively engaged in cutting-edge research. His primary focus lies in the realm of tumor biomarker identification and cancer liquid biopsy, areas crucial for advancing diagnostics and treatment strategies in oncology.
                </p>
                <p>
                Dr. Zhao's contributions extend beyond the research domain. In addition to his role as a dedicated researcher, he plays a pivotal role in educating the next generation of medical professionals. Dr. Zhao is actively involved in guiding and mentoring medical students, imparting his knowledge and expertise in utilizing progressive systems and applications in the clinical setting.
                </p>
                <p>
                Known for his positive attitude and tireless energy, Dr. Chen Zhao is a powerful force in his workplace. He serves as an inspiration to his colleagues, encouraging a collaborative and hardworking environment. Driven by a passion for excellence in patient care and medical research, Dr. Zhao continues to make significant strides in the field of oncology, leaving an indelible mark on both the academic and clinical aspects of medicine.
                </p>
                ",
                'order_id' => null ,'journal_id' => 8
            ],
            [
                "name" => "Ali Adel Dawood",
                "affliation" => "College of Medicine, University of Mosul, Mosul",

                "country" => "Iraq",
                "image" => "board-member-image/msr/02.png",
                "biography" => "
                  <p>
                  Dr. Ali Adel Dawood holds a Ph.D. in Microbiology from the University of Mosul, which he earned in 2015. Prior to this, he achieved a Master of Science in Biotechnology from the University of Technology Malaysia in 2011.
              With a prolific academic career, Dr. Dawood has made substantial contributions to the scientific community, publishing an impressive 61 research papers. He has evaluated over 590 papers and theses, demonstrating his commitment to the rigorous standards of academic research. Dr. Dawood possesses more than 20 years of expertise in teaching Medical Biology to medical students.
              In addition to his teaching role, Dr. Dawood actively contributes to the advancement of scientific knowledge through his editorial roles in three international journals.
                  </p>
                  ",
                'order_id' => null ,'journal_id' => 8
            ],
            [
                "name" => "Emmanuel Lamptey",
                "affliation" => "Institute of Life and Earth Sciences (Including Health and Agriculture), Pan African University, University of Ibadan",

                "country" => "Nigeria",
                "image" => "board-member-image/msr/05.png",
                "biography" => "
                        <p>
                        Emmanuel Lamptey, PhD is a registered nurse in Ghana with over 5 years of clinical practice and teaching. He holds a Bachelor of Science degree in Nursing from the University of Ghana and a Master of Science degree in Human Anatomy from the University of Lagos, Lagos, Nigeria. He had his terminal degree (PhD) from the Pan-African University, University of Ibadan, Nigeria. He works as a full-time Nursing lecturer at KAAF University Ghana and is also the deputy coordinator of the Postgraduate Nursing Program at the Institution. He is also a reviewing editor at e-life publications and a reviewer for many Scopus journals. Besides, he doubled as a Pan-African University Scholar of the African Union Commission.
                        </p>
                        ",
                'order_id' => null ,'journal_id' => 8
            ],
            [
                "name" => "Ismail Rabiu",
                "affliation" => "Department of Microbiology, School of Science and Information Technology, Skyline University Nigeria, Kano",

                "country" => "Nigeria",
                "image" => "board-member-image/msr/06.jpg",
                "biography" => "
                        <p>
                        Ismail Rabiu is a Microbiologist working on Antibiotic resistance, Antimicrobial chemotherapy, epidemiology & novel disease containment strategies.
                        His research interest is on Infectious disease with a focus on drug discovery, Antimicrobial Resistance and Susceptibility patterns of Extremely drug-resistant bacteria (EDRB) while employing phenotypic and molecular tools to study bacterial pathogens harbouring the Carbapenemase, β-lactamase and Extended-spectrum β-lactamase enzymes and genes. In other to contribute to developing alternative treatment options, he is working on the extraction and screening of different medicinal plants for bioactive compounds against clinically important EDRB. His most recent work is on the screening of fungal metabolites and determining their mechanism of action against Multidrug-resistant Bacteria. Ismail Has published numerous articles, and book chapters with Springer and Tailor & Francis and served as keynote speaker in many conferences across the continent of Africa, Europe and Asia. To his credit, he is a reviewer and Editorial Board member of many journals in Singapore, UK and Nigeria. He is actively involved in the activities of notable professional societies such as the Nigerian Society for Microbiology, the European Society for Microbiology, Global Outreach member of the American Society for Microbiology and the Nigerian Bioinformatics and Genomics Network, among others.</p>",
                'order_id' => null ,'journal_id' => 8
            ],
            [
                "name" => "Dr. Alemayehu Shiferaw Lema",
                "affliation" => "Assistant professor at St. Paul’s Hospital Millennium Medical College, Addis Ababa.",

                "country" => "Ethiopia ",
                "image" => "board-member-image/msr/alemayehu-shiferawl-ema.png",
                "biography" => "
                          <p>
                          Dr. Alemayehu Shiferaw Lema is a highly qualified Medical Doctor with more than 12 years of experience in clinical, public health, research, and academic areas. He is currently an Assistant Professor of Forensic Medicine and Toxicology at St. Paul’s Hospital Millennium Medical College in Addis Ababa, Ethiopia. In addition, he has earned a Master's degree in Epidemiology. His research mainly focuses on forensic medicine and public health, and he has extensive experience in both fields. He worked as a doctor in various hospitals and NGOs in Ethiopia, where he gained practical knowledge. He shares that knowledge with his students as an Assistant Professor. He teaches courses on Forensic Medicine and Toxicology to undergraduate and graduate students. He has published over 15 articles and book chapters in top-tier scientific journals, and his research has been presented at various conferences. In addition, he serves as a reviewer and editorial board member for numerous scientific journals, both nationally and internationally. He is dedicated to his academic and research work and is actively involved in community outreach programs related to public health and forensic medicine. He has taken the lead in organizing and participating in various workshops and training sessions that target healthcare professionals, law enforcement officials, and the general public.
                          Moreover, he has played a significant role in developing training and educational materials and curriculum development for healthcare students and professionals. As a member of several professional organizations, including the Ethiopian Medical Association (EMA), the Ethiopian Medico-legal Association (EMLA), and The International Association of Forensic Toxicology (TIAFT), he continues to demonstrate his commitment to advancing his field of expertise. Overall, he is a highly accomplished medical professional with a passion for advancing the fields of Forensic Medicine and Public Health through his academic work, research, and community outreach efforts.

                          </p>
                          ",
                'order_id' => null ,'journal_id' => 8
            ],
            [
                "name" => "Feryal Dabbagh-Gorjani",
                "affliation" => "Department of Immunology, School of Medicine, Shiraz University of Medical Sciences, Shiraz.",

                "country" => "Iran",
                "image" => "board-member-image/msr/feryal-dabbagh-gorjani.jpg",
                "biography" => "
                            <p>
                            Dr. Feryal Dabbagh-Gorjani is currently at Aston University, Birmingham. She is in the process of officially joining their research team. Her professional experience includes working at the Research Center of Fertility, clinical laboratories of hospitals, and research centers of pharmaceutical companies. Her expertise spans multiple sclerosis research, and she has served as a medical advisor, assisting clinical research teams and providing scientific training. Dr. Feryal has actively contributed to the academic community, presenting posters at international immunology congresses and publishing articles on various immunology topics.
                            </p>
                            ",
                'order_id' => null ,'journal_id' => 8
            ],
            //sfr
            [
                "name" => "Debarshi Nandy",
                "affliation" => "Brandeis International Business School, Waltham",

                "country" => "United States",
                "image" => "board-member-image/sfr/04.png",
                 "biography"=>"",
                //  <p>
                //  Dr. António Miguel Martins is a professor at the Faculty of Social Sciences of the University of Madeira, Portugal. He holds a PhD in Management at the University of Porto, Portugal. His current research activities include real estate finance, asset pricing, banking and performance measurement and management in hospitality and tourism.
                //  </p>
                //  "
                'order_id' => null ,'journal_id' => 9
            ],
            [
                "name" => "Joy Jia",
                "affliation" => "School of Management, Swansea University",

                "country" => "United Kingdom",
                "image" => "board-member-image/sfr/16.png",
                "biography" => "
                        <p>
                        Dr. Jia is a seasoned academic with a strong foundation in financial economics and empirical finance. She holds an MSc in Management (Finance) from Swansea University, UK, and a PhD in Management from the University of Bath. Before embarking on her academic journey in the UK, she gained practical experience working in the underwriting departments at the Tai Ping Insurance Company in Shanghai. Dr. Jia's research has been published in leading academic finance journals, contributing valuable insights to the field.
                        </p>
                        <p>
                        Her research portfolio spans several key areas, including the integration of risk management with strategic finance, and the application of asset pricing and accounting-based valuation models, particularly in the context of emerging markets. Recently, her focus has broadened to include emerging topics such as sustainable finance, ESG, FinTech, and cryptocurrency, reflecting her adaptability and interest in evolving financial landscapes.
                        </p>
                        ",
                'order_id' => null ,'journal_id' => 9
            ],
            [
                "name" => "António Miguel Martins",
                "affliation" => "Faculty of Social Sciences of the University of Madeira",

                "country" => "Portugal",
                "image" => "board-member-image/sfr/03.png",
                "biography" => "
                <p>
                Dr. António Miguel Martins is a professor at the Faculty of Social Sciences of the University of Madeira, Portugal. He holds a PhD in Management at the University of Porto, Portugal. His current research activities include real estate finance, asset pricing, banking and performance measurement and management in hospitality and tourism.
                </p>
                ",
                'order_id' => null ,'journal_id' => 9
            ],
            [
                "name" => "Bruno Nkuiya",
                "affliation" => "Department of Economics, Rensselaer Polytechnic Institute",

                "country" => "United States",
                "image" => "board-member-image/sfr/07.png",
                "biography" => "
              <p>
              Dr. Bruno Nkuiya currently works as a faculty member in the Department of Economics at Rensselaer Polytechnic Institute’s School of Humanities, Arts, and Social Sciences. He earned his Ph.D. in Economics from the University of Montreal and further enhanced his training through a postdoctoral program at the University of California, Santa Barbara. His research interests encompass environmental and resource economics, resource extraction under uncertainty and risk, and asset pricing.
              </p>
              ",
                'order_id' => null ,'journal_id' => 9
            ],
            [
                "name" => "Christer Ljungwall",
                "affliation" => "Department of Economics, University of Gothenburg, Gothenburg",

                "country" => "Sweden",
                "image" => "board-member-image/sfr/18.png",
                "biography" => "
              <p>
              Dr. Christer Ljungwall is Assoc. Prof. at Gothenburg University, Sweden. He specializes in international economics, development economics, and politics, with a specific emphasis on issues pertaining to P.R. China. He has held several positions over the years, including Prof. at Peking University-HSBC Business School, P.R China; Science Counselor and Sr. diplomat at the Embassy of Sweden, P.R China; Assoc. Prof. at Copenhagen Business School, Denmark; Sr. Economist with the Asian Development Bank, the Philippines; and Research-fellow at Peking University, P.R China. He is the author of numerous academic articles in economics, five monographs, and 100+ reports. His current research work focuses on Int. Trade, knowledge production & innovation, and geoeconomics. He is an advisor to governments and businesses and a frequently invited speaker on issues pertaining to Asian economic development and innovation. Dr. Ljungwall received his PhD in economics from Gothenburg University in 2003.
              </p>
              ",
                'order_id' => null ,'journal_id' => 9
            ],
            [
                "name" => "Konstantinos Vergos",
                "affliation" => "Associate Professor (Senior Lecturer) at the University of Portsmouth",

                "country" => "United Kingdom",
                "image" => "board-member-image/sfr/12.png",
                "biography" => "
              <p>
              Dr. Konstantinos Vergos is an Associate Professor ( Senior Lecturer) at the University of Portsmouth, specialising in Finance and Banking in the areas of Sustainability, Corporate Governance, and Real options.
              He holds a Ph.D. in Finance from  Bangor University, UK, and M.A. in Finance and Banking from  Bangor University, UK.
              Konstantinos has published studies in leading global journals like British Accounting Review, Journal of Banking Regulation, and Journal of International Financial Markets, Institutions & Money.
              </p>
              <p>
              He is a member of the Editorial Board of International Journal of Corporate Finance and Accounting (IJCFA), International Journal of Marketing Issues and Trade Policy & International Journal of Trade in Services.
              </p>
              <p>
              Konstantinos is a Reviewer of 38 Scientific Journals, including the British Journal of Management (4-star, ABS Journal) British Accounting Review (3-star-ABS), the Journal of Financial Stability (ABS 3), Corporate Governance (ABS 3) International Review of Economics and Finance (2-star, ABS  Journal) J. of Int. Fin Mgt & Acc (ABS2).
              </p>
              <p>
              He is among the top 15 reviewers Globally in Corporate Governance and Valuation and among the top 30 reviewers globally in Banking and received the Literati Award of 2020 & 2022 as an Outstanding Reviewer by Emerald Publishing.
              He is a certified financial analyst and has a systematic presence in global media  (Bloomberg,  Times, etc.) as an expert in company valuation, capital markets and financial policy issues.
              </p>
              ",
                'order_id' => null ,'journal_id' => 9
            ],
            [
                "name" => "Hatice Ozer Balli",
                "affliation" => "School of Economics and Finance, College of Business, Massey University",

                "country" => "New Zealand",
                "image" => "board-member-image/sfr/13.png",
                "biography" => "
              <p>
              After completing a Ph.D. in Economics from U of Houston, USA, Hatice joined Massey in 2008. She has experience in teaching Advanced Econometrics, Quantitative Analysis, Economic Policy, Macroeconomics, Microeconomics, Business Statistics, and Microeconomic Theory and Applications. She is also a PhD Placement / Job Market Coordinator for the Albany Campus.
              </p>
              <p>
              She is ranked 1st female top researcher in Massey Business School and as 2nd top female economist among all NZ Economic Institutions and universities in rankings for all years by IDEAS (retrieved on Oct 2022). Her research broadly focused on applied time series econometrics and international macro/ finance. Having a solid advanced econometrics background combined with an application to financial data in her PhD, she progressed by expanding her experience in applied econometrics. Through collaboration, she was able to assist others lacking the technical skills by applying the latest techniques over a wide range of topics, including finance (exchange rates, equities, and assets), macroeconomics (income smoothing and bilateral trade), aviation (airport efficiency, forecasting air travel demand), energy economics (green bonds), banking (financial and social performance of microfinance institutions), property (windfarms, property values, housing market studies), and Islamic finance (sukuk returns).
              </p>
              ",
                'order_id' => null ,'journal_id' => 9
            ],
            [
                "name" => "Palaskas Theodosios",
                "affliation" => "Professor of Economic Analysis and Dean of School of Economy and Public  Administration at Panteion University of Athens",

                "country" => "Greece",
                "image" => "board-member-image/sfr/17.png",
                "biography" => "
              <p>
              Theodosios B. Palaskas is a Professor of Economic Analysis & Development Economics, Dean of  School of Economy and Public Administration, Director of the Centre for Economic Policy Studies at the Panteion University of Athens, and scientific associate of Athens Academy. Previous academic appointments has been at the Oxford University – Institute of Economics and Statistics, International Development Center, and at St Peter’s College. He was elected Vice Rector at Panteion University for the period 2000-2002 and directed for five years the Greek Foundation for Economic and Industrial Research (IOBE). He completed his graduate studies in Athens and his postgraduate studies (M.Sc, MA (honours). & D. Phil), at the University of Oxford. He was a holder of the IKY -Foundation of Public Scholarships- and the NATO Scholarships for three years to study at Oxford. The European Commission, The World Bank, University of Oxford, ODA Research Scheme, Greek Ministries, such as Ministry of Development, Ministry of Economics, Bureau of Credit, Bank of Greece,  Association of Greek Banks, Athens Chamber of Commerce and Industry, Association of Greek Industries, etc have financed his research. His research interests focus on Economic Development issues and International Finance, such as Trade and Market Performance, Competitiveness, Finance and Asset Allocation, Economic Structural Reforms, and FDI. A large part of his research has been published in scientific, economic journals, books and working papers and has been quoted in the ‘Journal of Econometrics’, ‘Journal of the Royal Statistical Society’ ,  ‘Review of Economics and Statistics’, ‘Oxford Bulletin of Economics and Statistics’ , ‘Journal Of Development Economics’, etc.
              </p>
              ",
                'order_id' => null ,'journal_id' => 9
            ],
            [
                "name" => "Jurica Bosna",
                "affliation" => "University of Zadar, Department of Economics",

                "country" => "Croatia",
                "image" => "board-member-image/sfr/14.png",
                "biography" => "
              <p>
              Dr. Jurica Bosna is an Assistant Professor at the Department of Economics, University of Zadar. He holds lectures on the following subjects: Managerial skills, Macroeconomy, Quantitative methods, Organizational behavior and Decision-making. Has the experience of working in management positions in the real sector. Currently holds the position of Head of the Department of Economics at the University of Zadar and is Editor-in-chief of the international scientific journal Oeconomica Jadertina. He is a member of the Croatian branch of the European Association of Scientific Editors (HR EASE). He continuously improves his skills, thereby acquiring the latest knowledge and understanding in the field of management. The field of his scientific interest is wide, and he places a special focus on financial integration, resource management within the organization and sustainable management. He participated in many scientific projects and is a mentor to students on postgraduate doctoral studies.
              </p>
              ",
                'order_id' => null ,'journal_id' => 9
            ],
            [
                "name" => "Biljana S. Ilic",
                "affliation" => "Faculty of Project and Innovation Management 'Petar Jovanovic', Belgrade",

                "country" => "Serbia",
                "image" => "board-member-image/sfr/05.png",
                "biography" => "
                        <p>
                        PhD Biljana S. Ilic was born in Serbia. She graduated from the Higher Business School of the University of Belgrade and defended her doctoral dissertation at the Faculty of Management. Since 2008, she has been advancing both her academic career and her professional experience in higher education at the University of Belgrade (Megatrend). Since 2023, Biljana Ilić has been engaged as an associate professor for the scientific field of Project Management at the Faculty of Project and Innovation Management 'Petar Jovanović' in Belgrade. The areas of interest, as well as the scientific competences of Dr. Biljana Ilic, are related to Management, Finance, Green Economy, Sustainable Development, as well as Natural Resource Management. Dr. Biljana Ilic is the author and co-author of more than a hundred scientific and professional papers published in national and international scientific journals in cooperation with professors from the country and abroad. She has also been hired as a reviewer by numerous international, high-ranking journals of multidisciplinary scientific fields. She participated in the Swiss government project Swiss-Pro - Gender Equality, actively advocating for gender equality and the position of women in modern society.
                        Featured references of PhD Biljana S. Ilic can be found in the Web of Science researcher database and the ORCID database, link: <a href='https://orcid/'>https://orcid</a>.
                        </p>
                        ",
                'order_id' => null ,'journal_id' => 9
            ],
            [
                "name" => "Ahmed Mohamed Habib",
                "affliation" => "Accounting and Finance, Independent Research, Zagazig",

                "country" => "Egypt",
                "image" => "board-member-image/sfr/06.png",
                "biography" => "
                            <p>
                            Dr. Ahmed Mohamed Habib works in accounting and finance at Independent Research, Zagazig, Egypt. His research interests include accounting and finance science; corporate governance; intellectual capital; corporate social responsibility; environmental, social, and governance criteria; working capital management; corporate narrative reporting; corporate finance; earnings management; business strategies; corporate investment efficiency; performance optimization; continuous improvement; frontier analysis; data envelopment analysis (DEA); Malmquist Productivity Index analysis (MPI); DEA and MPI applications; managerial ability; knowledge management; decision support systems; and econometric analysis. He published numerous articles in high-ranking journals and conferences. He is a reviewer and editor for many journals indexed on Scopus and Web of Science.
                            </p>
                            ",
                'order_id' => null ,'journal_id' => 9

            ],
            [
                "name" => "Jinxin Cui",
                "affliation" => "School of Statistics and Mathematics, Zhejiang Gongshang University",
                "country" => "China",
                "image" => "board-member-image/sfr/01.png",
                "biography" => "
                 <p>
                Dr. Jinxin Cui is a highly accomplished financial researcher with an extensive educational background. He earned his Master's in Finance from Fuzhou University and later completed his Doctorate in Finance. During his academic journey, Dr. Cui further enriched his expertise as a Visiting Scholar at the National University of Singapore.
                 </p>
                 <p>
               His research areas span a diverse range, including Energy Finance, Financial Risk Management, Financial Econometrics, Financial Market Complex System Modeling, and Financial Engineering.
                 </p>
                 <p>
                Dr. Cui's impactful contributions to the field are evident in his recent publications, showcasing his expertise in analyzing higher-order moment risk spillovers, time-frequency co-movement, and risk connectedness among global oil markets and various financial and commodity markets. Dr. Cui's dedication to unraveling complex financial dynamics demonstrates his commitment to advancing the understanding of financial markets.
                 </p>
              ",
                'order_id' => null ,'journal_id' => 9
            ],
            [
                "name" => "Khaled Guesmi",
                "affliation" => "Professor of Finance and Director of the Center of Research for Energy and Climate Change (CRECC) Paris School of Business",

                "country" => "France",
                "image" => "board-member-image/sfr/09.png",
                "biography" => "
                  <p>
                  Dr. Khaled Guesmi is a professor of finance and the Director of the Center of Research for Energy and Climate Change (CRECC) at the Paris School of Business. He also holds positions as an Adjunct Professor at the Telfer School of Management, University of Canada, and an Affiliate Professor at the University of Luxembourg. Dr. Guesmi's research and teaching interests lie in empirical finance, applied time-series econometrics, and commodity markets. He obtained his HDR (Habilitation for Supervising Doctoral Research) in July 2015 and holds a Ph.D. in Economics from the University Paris Nanterre (2011) and an M.Sc. in Finance from Paris I University of Sorbonne (2005).
                  Dr. Guesmi has co-authored numerous books and published over 100 articles in leading refereed journals. He currently serves as a Senior Editor at Finance Research Letters, a Senior Editor at the International Journal of Emerging Markets, and an Associate Editor of Research in International Business and Finance.
                  </p>
                  <p>
                  In addition to his academic pursuits, Dr. Guesmi is the Project Manager of the European Commission's Horizon 2020 Program for Research and Innovation. This program seeks to promote a radical re-design of energy strategies in the southeastern Mediterranean region by developing new models of cooperation between the EU and these countries. The focus is on sustainability and efficiency policies, with cooperation applied to various aspects of the energy sector, such as the development of renewables, energy efficiency technologies, and demand-side policies. Dr. Guesmi believes that the EU's support in these areas could bring added value and contribute to the sustainable development of these countries.
                  </p>
                  ",
                'order_id' => null ,'journal_id' => 9
            ],
            [
                "name" => "Gema Albort-Morant",
                "affliation" => "Department of Financial Economics and Operations Management, Sevilla University",

                "country" => "Spain",
                "image" => "board-member-image/sfr/11.png",
                "biography" => "
                  <p>
                  Gema Albort-Morant holds a Ph.D. degree with an international mention in Strategic Management and International Business from the University of Seville (Spain). Currently, she is an Associate Professor of Finance at the Department of Financial Economics and Operations Management at the University of Seville. Her research is focused on Innovation, Sustainability, Finance, Entrepreneurship and Fintech. She has published previous works within edited books, academic conference proceedings, and refereed scientific journals, including the Journal of Business Research, Journal of Knowledge Management, and Technological Forecasting and Social Change, among others.
                  </p>
                  ",
                'order_id' => null ,'journal_id' => 9
            ],
            [
                "name" => "Jin Changlun",
                "affliation" => "School of Banking and Finance, University of International Business and Economics",
                "country" => "China",
                "image" => "board-member-image/sfr/02.png",
                "biography" => "
                 <p>
               Jin Changlun holds a Ph.D. in Finance and is an expert in microeconomics, macroeconomics, financial economics, and international portfolio investment. His research has been published in Finance Research Letters and Chinese Economic Review. Jin serves as an anonymous referee for various reputable academic journals, contributing to the rigor of scholarly publications.
                 </p>
              ",
                'order_id' => null ,'journal_id' => 9
            ],
            [
                "name" => "Kulwa Mang'ana",
                "affliation" => "School of Business Studies and Humanities (BuSH) The Nelson Mandela African Institution of Science and Technology(NM-AIST) Arusha",

                "country" => "Tanzania",
                "image" => "board-member-image/sfr/08.png",
                "biography" => "
                <p>
                Kulwa Mang'ana is an academician affiliated with the Nelson Mandela African Institute of Science and Technology (NM-AIST) in Arusha, Tanzania, where he serves as a faculty member of the School of Business Studies and Humanities. He is also involved in research at the Sokoine University of Agriculture (SUA), specifically in the Department of Agricultural Economics and Agribusiness.
                </p>
                <p>
                In terms of his professional capacity, Mang'ana specializes in accountancy, business, and financial management. He is recognized as a Certified Public Accountant with certification number ACPA-3353. Mang'ana has contributed to research in his field, as indicated by his publications on platforms like ResearchGate, where peers have cited his work. One notable publication he has co-authored is Financial Management Practices and Performance of Agri-SMEs in Tanzania: A Structural Equation Modeling Analysis, which reflects his research focus on financial management practices in the agricultural sector.
                </p>
                ",
                'order_id' => null ,'journal_id' => 9
            ],
            [
                "name" => "Sonja Brlečić Valčić",
                "affliation" => "Deputy Head, Department Of Economics, University Of Zadar",

                "country" => "Croatia",
                "image" => "board-member-image/sfr/15.png",
                "biography" => "
                    <p>
                    Dr. Sonja Brlečić Valčić is an Associate Professor with many years of work experience in the private sector. She has significant work experience related to project management and business organization, which she gained through many years of work in the international oil OFS company Saipem. Analytical skills and efficient planning skills are acquired through many years of scientific work, but also through work experience in the business. Through BVLab, she gains experience in promoting innovation and entrepreneurship by providing numerous consultations to entrepreneurs.
                    </p>
                    ",
                'order_id' => null ,'journal_id' => 9
            ],
            [
                "name" => "Stephen Oduro",
                "affliation" => "Faculty of Economics and Management, Free University of Bozen-Bolzano",

                "country" => "Italy",
                "image" => "board-member-image/sfr/16.jpg",
                "biography" => "
                        <p>Dr. Stephen Oduro is an Assistant Professor at the Faculty of Economics and Management of the Free University of Bozen-Bolzano, Italy. He earned his Ph.D. in Management from the University of International Studies of Rome, Italy. He also completed two postdoctoral programs at the Marconi University of Rome, Italy, and the Polytechnic University of Marche, Ancona, Italy. Dr. Oduro is an expert in quantitative research, particularly in meta-analysis. His current research interests include but are not limited to innovation management, entrepreneurship, digital innovation, family business management, CSR and sustainability, and small business management. He has authored and co-authored more than 50 journal and conference articles, serves in guest editorial assignments, and is a reviewer for several top journals. Professionally, Dr. Oduro specializes in accountancy at the Institute of Chartered Accountants, Ghana (ICAG), Level 2 (out of 3 levels).
                        </p>
                    ",
                'order_id' => null ,'journal_id' => 9
            ],
            [
                "name" => "Paul Wang",
                "affliation" => "School of Accounting and Finance, The Hong Kong Polytechnic University",

                "country" => "Hong Kong",
                "image" => "board-member-image/sfr/paul-wang.jpg",
                "biography" => "
                        <p>Dr. Paul Wang is on the faculty in the School of Accounting and Finance under the Faculty of Business at The Hong Kong Polytechnic University, specializing in the fields of International Economics, Innovation, and Fintech. He holds a Ph.D. in Economics from Hong Kong University of Science and Technology, an M.B.A. from the Kellogg Graduate School of Management at Northwestern University, Masters in Engineering Management from the McCormick School of Engineering at Northwestern University, an M.S. and B.S. in Mechanical Engineering from University of Illinois at Urbana-Champaign. He has published studies in leading global journals in Economics, Finance, and Engineering.
                        Professionally, he has worked for leading global companies such as Sinopec Group, Bank of America Merrill Lynch, and IBM. He holds the professional titles of Chartered Financial Analyst (CFA), Chartered Secretary and Chartered Governance Professional (ACG, HKACG), and Project Management Professional (PMP).

                        </p>
                    ",
                'order_id' => null ,'journal_id' => 9
            ],
            [
                "name" => "Philip L. Fazio",
                "affliation" => "College of Business & Management, Lynn University, Florida",

                "country" => "United States",
                "image" => "board-member-image/sfr/philip-fazio.png",
                "biography" => "<p>Dr. Phil Fazio is a finance professor who specializes in corporate and investment finance.</p>
                                            <p>Dr. Phil earned designations as a Certified Financial Planning™ designation, which informs his individual financial planning, and a CIMA® (Certified Investment Management Analyst), which he also uses daily in the wealth management practice.
                    He is past chair of the CIMA® certification commission, which is the educational standards committee for the Investment and Wealth Institute. He is also the past chair of the CFP® board’s examination commission. Dr. Fazio is a long-time volunteer with the CFP Board of Standards, and teaches in a CFP-registered education program.
                    </p>
                    <p>Dr. Fazio had a significant career in corporate banking in Chicago and Miami, which brings real-life experience to his teaching of corporate finance.
                    Lastly, he is on the editorial board for the Investment and Wealth Monitor and the Journal of Investment Consulting. Both are publications of the Investment and Wealth Institute.
                    </p>
                ",
                'order_id' => null ,'journal_id' => 9
            ],
        ]);
    }
}
