<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccordionsTableSeeder extends Seeder
{
    private $accordions = [
        3 => [
            [
                'title' => 'CMS Open Source (Wordpress, Drupal)',
                'description' => 'Les systèmes de gestion de contenu (CMS) sont très répandus sur Internet, et vous permettent de directement gérer vous-mêmes le contenu de votre site web.<br><br>De plus, l\'utilisation d\'un CMS facilite le processus de création pour les sites simples, et permet une mise en ligne rapide et à moindre coût, pour un produit qualitatif.',
            ],
            [
                'title' => 'Développement sur mesure',
                'description' => 'Vous savez précisément ce que vous avez en tête et vous souhaitez un site à 100% en adéquation avec vos besoins ? À travers notre service de <b>Développement sur mesure</b>, nous vous proposons une création de site web codé de A à Z et personnalisable à souhait.',
            ],
        ],
        // end of one service
        7 => [
            [
                'title' => 'Réseaux sociaux',
                'description' => 'Les réseaux sociaux représentent aujourd’hui le premier point de contact d’une organisation avec un utilisateur et un client potentiel. Au premier coup d’œil, vous devez le convaincre de la pertinence et de la qualité de votre contenu pour l’inciter à aller plus loin. Redox Digital crée pour vous une stratégie de communication précise et adaptée aux réseaux sociaux. Nous gérons également vos publicités sur les réseaux sociaux.',
            ],
            [
                'title' => 'Référencement SEO, SEA',
                'description' => 'Pour que votre site soit bien positionné dans les résultats de recherche Google, il doit être bien référencé. Il est donc important de travailler son référencement naturel (SEO), en utilisant des mots-clés adaptés et bien ciblés. Si vous souhaitez apparaître encore plus rapidement dans les résultats de recherche, vous pouvez opter pour le référencement payant (SEA), comme de la publicité sur les moteurs de recherche.',
            ],
        ],
        // end of one service
        8 => [
            [
                'title' => 'Audit & analyse',
                'description' => 'Nous nous immergeons dans votre contexte et votre environnement digital dans le but d’analyser vos forces, vos faiblesses et votre positionnement face à vos concurrents. Tout cela afin de mettre en place une stratégie digitale efficace et concevoir une expérience optimale.',
            ],
            [
                'title' => 'Formation & coaching',
                'description' => 'La plupart des services que nous vous proposons peuvent être accompagnés d\'une formation. En effet, nous vous formons à utiliser des outils comme Wordpress, Drupal, Google Ads et encore bien d\'autres selon vos besoins. Tout au long de l\'année, nous restons à votre écoute.',
            ],
            [
                'title' => 'Design d\'expérience utilisateur (UX)',
                'description' => 'Grâce à l\'<i>UX Design</i>, nous assurons que votre site internet soit ludique, pratique et correctement développé, le tout dans un budget maîtrisé.  Nous veillons à ce que la navigation du client sur votre site se fasse de manière optimale, pour une meilleure expérience. L\'utilisateur est au cœur de chacun de nos services, et en misant sur une meilleure expérience d\'utilisation, vous augmenterez l\'impact de votre site web sur vos visiteurs.',
            ],
        ],
        // end of one service
        9 => [
            [
                'title' => 'Réalisation de vidéo, clip ou court-métrage',
                'description' => 'Nous réalisons des vidéos de tous types. Nous vous invitons à nous décrire votre projet futur.',
            ],
            [
                'title' => 'Vidéos promotionnelles pour les réseaux sociaux',
                'description' => 'Des petits formats pour de grandes idées ! C\'est un moyen très efficace pour toucher un large public.',
            ],
            [
                'title' => 'Couverture d\'événements',
                'description' => 'Du brief au montage, nous filmons vos événements et vous remettons des images correspondant à vos désirs.',
            ],
            [
                'title' => 'Captation live',
                'description' => 'La captation live est de plus en plus utilisée. Que cela soit pour la diffusion en direct d\'un événement ou d\'une conférence, Redox Digital met à votre disposition son matériel et ses compétences audiovisuelles.',
            ],
        ],
        // end of one service
        10 => [
            [
                'title' => 'Photographie de reportage, d\'évènements, d\'architecture et immobilière, etc...',
                'description' => 'Nous venons à votre rencontre et créeons les images qui répondent à vos besoins. N\'hésitez pas à nous faire part de vos envies.',
            ],
            [
                'title' => 'Photos pour les réseaux sociaux',
                'description' => 'Sans photo, moins d\'impact! Enrichissez vos publications sur les réseaux sociaux avec des photos de qualité.',
            ],
            [
                'title' => 'Retouches photographiques',
                'description' => 'Sublimez vos photos! Redox Digital s\'occupe de retoucher vos photos afin qu\'elles correspondent encore mieux à vos attentes et à votre identité d\'entreprise.',
            ],
        ],
        // end of one service
        11 => [
            [
                'title' => 'Identité de marque (création de logo, cartes de visite, ...)',
                'description' => 'Vous débutez votre parcours entrepreunarial, et souhaitez créer une identité visuelle forte ? Ou vous souhaitez simplement rafraîchir votre logo et votre papeterie ? Le tout à petit prix ? N\'attendez pas pour nous contacter !',
            ],
            [
                'title' => 'Design d\'interfaces (UI)',
                'description' => 'Souvent combiné avec la création de site web, Redox Digital vous propose un service de création d\'interface utilisateur pour vos sites et applications web, afin d\'offrir à votre clientèle la meilleure expérience d\'utilisation possible, tout en étant en phase avec votre identité visuelle.',
            ],
        ],
        // end of one service
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accordions')->delete();

        foreach ($this->accordions as $service_id => $accordion) {
            foreach ($accordion as $accordion_data) {
                DB::table('accordions')->insert([
                    'service_id' => $service_id,
                    'title' => $accordion_data['title'],
                    'description' => $accordion_data['description'],
                ]);
            }
        }
    }
}
