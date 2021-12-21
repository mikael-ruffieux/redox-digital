<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CVProjectsSeeder extends Seeder
{
    private $projects = [
        [
            "date" => "05.03.2021",
            "client_id" => 8,
            "title" => "Refonte de site web",
            "project_url" => "https://bullshop.ch",
            "categories" => "Développement web / web-design",
            "desc" => "Profitant du creux créé par le COVID, la boutique Bullshop m'a chargé de créer un nouveau design pour son site internet, qui commençait à date.<br/><br/>
            Le site utilise le CMS Wordpress, à la demande de Bullshop SA, pour une gestion facilitée des contenus du site.",
            
        ],
        [
            "date" => "01.03.2021",
            "client_id" => 12,
            "title" => "Application web de tracking pour le tour de Romandie (concept)",
            "project_url" => "",
            "categories" => "Développement web / web-design",
            "desc" => "",
            
        ],
        [
            "date" => "01.04.2021",
            "client_id" => 13,
            "title" => "Création d'un cours d'introduction au développement web",
            "project_url" => "https://github.com/futurekids-io/6.011-creation-de-site-web-2.0",
            "categories" => "Web / Formation",
            "desc" => "Chargé de cours chez FutureKids depuis moins de 6 mois, j'ai reçu la tâche de créer un nouveau cours, dans la continuité du premier que j'avais déjà donné, sur la programmation web.<br/><br/>
            Le premier cours était une introduction à la création de site web, avec la découverte des languages HTML / CSS, ainsi que de l'histoire du web.<br/><br/>
            Le deuxième cours, que j'ai donc pu créé de toutes pièces, était une introduction aux paradigmes de programmation et à l'utilisation du language PHP.<br/><br/>
            Le contenu du cours est disponible sur GitHub.",
            
        ],
        [
            "date" => "01.05.2018",
            "client_id" => 20,
            "title" => "Showreel 2017",
            "project_url" => "https://vimeo.com/267380360",
            "categories" => "Vidéo",
            "desc" => "Vidéo rétrospective de l'année 2017. Cette vidéo était l'élément principal de mon dossier de candidature à l'ERACOM, l'école que je voulais rejoindre avant de découvrir la filière d'Ingénierie des Médias de la HEIG-VD.",
            "image" => ""
        ],
        [
            "date" => "01.06.2021",
            "client_id" => 19,
            "title" => "Projet d'articulation : SwissGuesser",
            "project_url" => "https://pingouin.heig-vd.ch/bread/home",
            "categories" => "Développement web",
            "desc" => "Comme dernier projet de la 2ème année de bachelor, nous avons reçu la tâche de développer une application web, par groupe de 6 étudiant.e.s, qui avait pour but la découverte et/ou la promotion des villes suisses.<br/><br/>
            Nous nous sommes inspirés pour ce projet du jeu 'GeoGuessr', un jeu qui consiste à se repérer sur le globe à travers des photos 360°.<br/><br/>
            SwissGuesser, notre version du jeu, a été un travail de longue haleine sur 3.5 semaines, et nous a permis de mettre en pratique les compétences techniques, graphique et sociales acquises au cours des 2 premières années du bachelor.",
            
        ],
        [
            "date" => "01.07.2021",
            "client_id" => 7,
            "title" => "Vidéo d'animation pour le raclette MAZOT",
            "project_url" => "https://drive.google.com/file/d/1FFpIqq756UyDtw_RTMLCrdIi0HZHlk-e/view?usp=sharing",
            "categories" => "Vidéo / Motion-Design",
            "desc" => "Afin de promouvoir les nouveaux emballages de leur fromage à raclette MAZOT, Cremo SA m'a mandaté pour la réalisation d'une série d'animations présentant leurs nouveaux emballages.",
            
        ],
        [
            "date" => "01.08.2019",
            "client_id" => 4,
            "title" => "Vidéo de présentation des nouveaux locaux",
            "project_url" => "https://vimeo.com/371218844",
            "categories" => "Vidéo",
            "desc" => "Vidéo à titre promotionnelle pour présenter les nouveaux locaux de l'association \"Müli Deisswil\". Cette association a pour but de promouvoir la culture dans la périphérie bernoise."
        ],
        [
            "date" => "01.08.2019",
            "client_id" => 2,
            "title" => "Campagne \"MOVE\" 2018",
            "project_url" => "https://www.youtube.com/embed/8RPvu0kHCwY",
            "categories" => "Vidéo",
            "desc" => "« Les aventuriers de la vidéo » : c'est le nom du projet lancé par Groupe E.<br/><br/>
            Durant une semaine, accompagné de Tania Biland, j'ai eu l'occasion de parcourir la Suisse pour réaliser une série de 10 vidéos faisant la promotion du réseau Groupe E de bornes pour véhicules électriques.",
            
        ],
        [
            "date" => "01.09.2021",
            "client_id" => 11,
            "title" => "Conception & création du site internet",
            "project_url" => "https://redoxdigital.ch",
            "categories" => "Développement web / web-design",
            "desc" => "Malgré sa fondation au mois de mars 2021, il a fallut attendre environ 6 mois pour que le site web de l'entreprise voit le jour.<br/><br/>
            Ce projet, qui est toujours 'in progress', est le résultat d'un travail de planification, de conception et de programmation de plusieurs mois.<br/><br/>
            En effet, même sans notre site, les projets digitaux sont rapidement arrivés, et la création du site internet est vite passé en second plan.",
            
        ],
        [
            "date" => "01.10.2019",
            "client_id" => 14,
            "title" => "Application web de consultation en ligne",
            "project_url" => "",
            "categories" => "Développement web",
            "desc" => "",
            
        ],
        [
            "date" => "01.11.2020",
            "client_id" => 15,
            "title" => "Intégration du nouveau design mobile",
            "project_url" => "https://www.pet-alert-01.fr/",
            "categories" => "Développement web",
            "desc" => "Afin de remettre le design au goût du jour, on m'a chargé d'adapter le site internet initial à son nouveau design. Une vingtaine de pages ont été ainsi refondées, et remises au goût du jour.",
            
        ],
        [
            "date" => "10.10.2016",
            "client_id" => 16,
            "title" => "Créations de sites web",
            "project_url" => "https://www.stiftung-mehrwert.ch/",
            "categories" => "Développement web / web-design",
            "desc" => "Lors d'un voyage humanitaire en Bulgarie,  j'ai eu l'occasion de réaliser une vidéo promotionnelle ainsi que 2 sites internet pour Alpha Bulgaria ou leurs partenaires.",
            
        ],
        [
            "date" => "13.12.2018",
            "client_id" => 17,
            "title" => "La Cité des Jeux",
            "project_url" => "https://vimeo.com/306132048",
            "categories" => "Vidéo",
            "desc" => "Vidéo rétrospective de la Cité des Jeux, à Martigny.<br/><br/>La Cité des Jeux est l'événement annuel entièrement basé sur le thème du JEU. Cette manifestation ludique réunit des associations",
            
        ],
        [
            "date" => "14.10.2016",
            "client_id" => 16,
            "title" => "Vidéo de présentation",
            "project_url" => "https://www.youtube.com/watch?v=iw9aRkh6fGE",
            "categories" => "Vidéo",
            "desc" => "Toujours dans le cadre de mon voyage humanitaire en Bulgarie, j'ai réalisé une vidéo de présentation d'un ancien hooligan, qui en rejoignant le programme 'Alpha', a changé son style de vie, et a pu ouvrir sa propre pizzeria.",
            
        ],
        [
            "date" => "18.04.2020",
            "client_id" => 19,
            "title" => "Vidéo didactique - Le processus d'achat",
            "project_url" => "https://www.youtube.com/watch?v=hc9fAKjfzmQ",
            "categories" => "Vidéo",
            "desc" => "Cette vidéo a été réalisée dans le cadre du cours d'analyse de marché et stratégie marketing, enseigné par Mme. Saskia Faulk, à la HEIG-VD, filière d'ingénierie des médias.<br><br>Le défi de ce projet a été de réaliser cette vidéo au début des restrictions sanitaires liées au COVID-19.<br><br>Ainsi, les 4 membres du groupe ne se sont jamais vu 'en vrai' durant ce projet.",
            
        ],
        [
            "date" => "18.09.2019",
            "client_id" => 18,
            "title" => "Vidéo rétrospective du cours de répétition",
            "project_url" => "https://vimeo.com/360733552",
            "categories" => "Vidéo",
            "desc" => "À cause d'une épidémie de puces de lit, mon cours de répétition 2019 a été \"gelé\" durant un bon moment.<br/><br/>
            Pour capitaliser sur ce temps à disposition, j'ai rejoint la cellule de communication du bataillon, où j'ai pu réaliser cette vidéo, aperçu des exercices des explorateurs blindés du bataillon.<br/><br/>
            Cette expérience était surréelle. En effet, parcourir un terrain d'exercice armé non plus d'un fusil, mais de mon appareil photo était une nouveauté pour moi.",
            
        ],
        [
            "date" => "19.12.2018",
            "client_id" => 17,
            "title" => "Gailland Bro's",
            "project_url" => "https://vimeo.com/user3754001",
            "categories" => "Vidéo / graphisme",
            "desc" => "Les frères Gailland, amateurs de défis sportifs extrêmes, se sont réunis sous le nom \"Gailland Bros's\".<br/><br/>
            Ce duo s'était fixé comme objectif de rouler en relais durant 24h sur la piste circulaire du vélodrome d'Aigle.<br/><br/>
            Avant et pendant leur exploit, j'ai pu les filmer pour fournir un aperçu de leur préparation et de leur effort. J'ai aussi fait l'exercice de réaliser leur logo.<br/><br/>
            La série de vidéos est disponible sur Vimeo.",
            
        ],
        [
            "date" => "20.02.2020",
            "client_id" => 19,
            "title" => "The Saloon",
            "project_url" => "",
            "categories" => "",
            "desc" => "",
            
        ],
        [
            "date" => "20.11.2019",
            "client_id" => 3,
            "title" => "Intégration du nouveau design du site",
            "project_url" => "https://changementemergent.ch/",
            "categories" => "Développement web",
            "desc" => "",
            
        ],
        [
            "date" => "21.01.2021",
            "client_id" => 19,
            "title" => "Déli'Vrac",
            "project_url" => "https://vimeo.com/502942135",
            "categories" => "Vidéo",
            "desc" => "Vidéo réalisée dans le cadre du cours de production de contenu médias, enseigné par Mme. Marcelle Brücher, à la HEIG-VD, filière ingénierie des médias. Cette vidéo s'ancrait dans une proposition de mandat à l'entreprise 'Déli'vrac', afin de compléter leurs efforts de communication.",
            
        ],
        [
            "date" => "22.01.2020",
            "client_id" => 1,
            "title" => "\"Les p'tits jobs\"",
            "project_url" => "https://vimeo.com/386443904",
            "categories" => "Vidéo",
            "desc" => "Le service \"Ptits Jobs\" est une mesure mise en place par le Service de la Jeunesse de la Ville de Bulle (SJB) proposant un soutien professionnel aux jeunes désirant rejoindre le monde du travail. Le projet a été initié par Mme. Pamela Rey.<br/><br/>
            À sa demande, j'ai réalisé une vidéo présentant la mesure, et mettant en scène trois jeunes qui ont pu suivre ce programme, afin de mieux connaître le monde du travail.",
            
        ],
        [
            "date" => "22.02.2021",
            "client_id" => 1,
            "title" => "Conférence sur l'enfant et la violence conjugale",
            "project_url" => "https://www.youtube.com/watch?v=fJB7mV7kzHU",
            "categories" => "Vidéo / captation live",
            "desc" => "La conférence aurait dûe avoir lieu durant la semaine sur la sensibilisation contre les violences faites aux femmes.<br/><br/>
            Malheureusement, COVID oblige, cette semaine thématique n'a pas pu avoir lieu. Le SJB a donc mis en place cette conférence rediffusée en direct sur les réseaux sociaux, afin que tou.te.s les intéressé.e.s puissent suivre le séminaire, et poser leurs questions en direct.<br/><br/>
            Je me suis occuper de mettre en place le matériel, et de réaliser le direct.",
            
        ],
        [
            "date" => "22.12.2018",
            "client_id" => 5,
            "title" => "Montage de la vidéo des 30 ans de la fondation",
            "project_url" => "https://vimeo.com/307866187",
            "categories" => "Vidéo / montage",
            "desc" => "Montage mandaté par STARTUP MINISTRIES (SM) à l'occasion des 30 ans d'Ibeto.<br/><br/>
            Les plans ont été tournés à l'interne. Je me suis occupé du montage, de l'étalonnage ainsi que du sous-titrage.",
            
        ],
        [
            "date" => "23.04.2017",
            "client_id" => 20,
            "title" => "Showreel 2016",
            "project_url" => "https://vimeo.com/214376110",
            "categories" => "Vidéo",
            "desc" => "Vidéo rétrospective de l'année 2016.",
            
        ],
        [
            "date" => "23.04.2018",
            "client_id" => 1,
            "title" => "Bulle box 2018",
            "project_url" => "https://vimeo.com/266120847",
            "categories" => "Vidéo / développement web",
            "desc" => "",
            
        ],
        [
            "date" => "25.05.2018",
            "client_id" => 20,
            "title" => "Islande 2018",
            "project_url" => "https://vimeo.com/338079250",
            "categories" => "Vidéo",
            "desc" => "Vidéo réalisée lors d'un voyage en Islande. La vidéo étant pour moi une passion avant tout, le montage de la vidéo a duré une année.",
            
        ],
        [
            "date" => "07.07.2021",
            "client_id" => 6,
            "title" => "Shooting Photo Deathless",
            "project_url" => "",
            "categories" => "Photographie",
            "desc" => "Deathless est un groupe de hard rock gruérien, et regroupe à la base une bande de copains depuis les années 80.<br/><br/>
            Pour fêter l'arrivée d'une nouvelle chanteuse, le groupe m'a mandaté pour une séance photos qui seront publiées sur leurs réseaux sociaux.",
            
        ],
    ];

    private function randDate() {
        $nbJours = rand(-2800, 0);
        return Carbon::now()->addDays($nbJours);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('c_v_projects')->delete();

        $i = 1;
        
        foreach ($this->projects as $project) {
            $time = strtotime($project['date']);

            $newformat = date('Y-m-d',$time);

            $project['date'] = $newformat;

            $project["image"] = "storage/cv/$i.png";

            DB::table('c_v_projects')->insert($project);

            $i ++;
        }
    }
}
