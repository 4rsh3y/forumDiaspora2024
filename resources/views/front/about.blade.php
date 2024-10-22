@extends('layout-app')

@section('title', 'Concernant le Forum de la Diaspora Ivoirienne 2024')

@section('content')

<section class="banner page-banner position-relative pb-0">
    <div class="overlay">
    </div>
    <div class="container">
        <div class="page-title position-relative py-10 text-center">
            <div class="banner-title position-relative w-lg-50 m-auto mb-1">
                <h2 class="p-0 text-white text-shadow">
                    THÈME : <div class="sperator w-20 border-bottom border-2 border-pink m-auto"></div><br>
                        ATTRACTIVITÉ DES TERRITOIRES ET MÉCANISMES D'APPUI À LA DIASPORA POUR LE DÉVELOPPEMENT DURABLE EN CÔTE D'IVOIRE
                </h2>
            </div>
        </div>
    </div>
</section>

<section class="news-single">
    <div class="container">
        <div class="news-single-inner">
            <div class="row gx-lg-5 gy-5">

                <div class="col-lg-8">
                    <div class="news-left">
                        <div class="banner-title pb-3">
                            <h3 class=" text-center pb-3">Forum de la <span class="pink">DIASPORA Ivoirienne</span> 2024</h3>
                        </div>
                        <div class="news-img mb-4">
                            <!-- <img src="{{asset('https://placehold.co/1920x850') }}" alt="" class="w-100 rounded shadow mb-4"> -->
                            <div class="news-right">
                                <div class="about-organizer p-6 box-shadow rounded text-center mb-6">
                                    <div class="organizer-title mb-3">
                                        <h6>Concernant les organisateurs</h6>
                                    </div>
                                    <div class="sperator w-20 border-bottom border-2 border-pink m-auto"></div>
                                    <div class="container-fluid" style="margin: -10% 0 -13% 0 !important">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <img src="{{asset('assets/images/logo/senat.png')}}" alt="" width="100%">
                                            </div>
                                            <div class="col-lg-6">
                                                <img src="{{asset('assets/images/logo/ae.png')}}" alt="" width="100%">
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="organizer-bio pb-5 mb-4 border-bottom border-2 border-grey border-opacity-25 border-bottom-dashed">
                                        <h6 class="mb-1">Le forum de la DIASPORA IVOIRIENNE est portée par 2 entitées maîtresse, e, matière de DIASPORA, le SENAT pour [...] et la DGIE pour son expertise en la question de [...]</h6>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="news-description pb-4">
                            <h4 class="mb-3">Contexte</h4>
                            <p class="p-justify">
                            La Diaspora ivoirienne représente une force vive significative, constituée d'environ un million deux cent quarante milles (1.240.000) personnes. Ces Ivoiriens établis hors de la Côte d'Ivoire sont des acteurs clés du développement national, contribuant à l'économie par le biais des transferts de fonds, des investissements directs et de l'import-export.</p>
                            <p class="p-justify">
                            Le Président de la République SEM Alassane OUATTARA, conscient de l'importance et de la force vive que représente notre Diaspora, a érigé la thématique diasporique au cœur de l'action gouvernementale en l'estampillant du sceau de la reconnaissance officielle à travers trois actes majeurs : <br>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="event-detail-right text-center">
                        <div class=" align-items-center justify-content-center justify-content-lg-start mb-5">
                            <a class="btn" href="{{route('inscriptions')}}">Inscription</a>
                        </div>
                        <div class="event-info-box p-6 box-shadow rounded mb-6">
                            <div class="info-header mb-5">
                                <h6 class="pb-2">Informations</h6>
                                <div class="sperator w-20 m-auto border-bottom border-2 border-pink"></div>
                            </div>
                            <div class="event-info-list">
                                <div
                                    class="event-info d-md-flex text-md-start align-items-center pb-3 mb-3 border-dashed-bottom-2">
                                    <div class="info-icon">
                                        <i class="fa fa-calendar pink me-2 m-sm-0" aria-hidden="true"></i>
                                    </div>
                                    <div class="event-info-detail ms-1 m-sm-0">
                                        <p class="my-1 fw-semibold black text-uppercase">Date</p>
                                        <p class="mb-0">12 & 13 Novembre 2024</p>
                                    </div>
                                </div>
                                <div
                                    class="event-info d-md-flex text-md-start align-items-center pb-3 mb-3 border-dashed-bottom-2">
                                    <div class="info-icon">
                                        <i class="fa fa-clock-o pink me-2 m-sm-0" aria-hidden="true"></i>
                                    </div>
                                    <div class="event-info-detail ms-1 m-sm-0">
                                        <p class="my-1 fw-semibold black text-uppercase">Temps</p>
                                        <p class="mb-0">08h00 - 16h00</p>
                                    </div>
                                </div>
                                <div class="event-info d-md-flex text-md-start align-items-center mb-3 border-0">
                                    <div class="info-icon">
                                        <i class="fa fa-map-o pink me-2 m-sm-0" aria-hidden="true"></i>
                                    </div>
                                    <div class="event-info-detail ms-1 m-sm-0">
                                        <p class="my-1 fw-semibold black text-uppercase">Lieu</p>
                                        <p class="mb-0">Fondation Félix HOUPHOUËT-BOIGNY pour la Recherche de la Paix de Yamoussoukro</p>
                                    </div>
                                </div>
                            </div>
                            <div class="map">
                                <iframe height="200" class="rounded w-100"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15847.098594053849!2d-5.2640813!3d6.7972496!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfb89728969f5ce1%3A0x9408210ed875b2dd!2sFondation%20F%C3%A9lix%20Houphou%C3%ABt%20Boigny%20pour%20la%20Recherche%20de%20la%20Paix!5e0!3m2!1sfr!2sci!4v1729563001017!5m2!1sfr!2sci"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="row gx-lg-5 gy-5 mb-5">
                <div class="col-lg-12">
                    <div class="news-right">
                        <ul class="p-justify mb-4">
                            <li class="mb-2">
                                Son appel du 26 mai 2011 lancé à Paris à l'endroit de la Diaspora afin qu'elle revienne en Côte d'Ivoire prendre toute sa place, pour contribuer au processus de développement socio- économique ;
                            </li>
                            <li class="mb-2">
                                la création en juin 2012 du Ministère de l'Intégration Africaine et des Ivoiriens de l'Extérieur, un département ministériel spécifiquement dédié à la Diaspora ivoirienne auparavant reçues par la Direction des Ivoiriens de l'Etranger du Ministère des Affaires Etrangères ; 
                            </li>
                            <li class="mb-2">
                            La consécration constitutionnelle de l'importance de la Diaspora par la Constitution du 8 novembre 2016 qui en confiant la représentation des Ivoiriens de l'étranger au Sénat en son article 87 ouvre désormais la voie à une meilleure intégration de ses membres dans le tissu socio-économique territorial du pays. Depuis mai 2017, à la faveur de la 2eme Edition du Forum de la Diaspora Ivoirienne, la Diaspora est investie comme la 32e région.
                            </li>
                        </ul>

                    <p class="p-justify">
                        En outre, lors du Forum des Collectivités territoriales tenu les 18 et 19 février 2020, à la Fondation Félix HOUPHOUET-BOIGNY pour la Recherche de la Paix, à Yamoussoukro, le rôle déterminant des Collectivités territoriales dans l'attractivité des territoires ivoiriens n'a pas échappé au Président de la République, qui en a assuré le haut patronnage. Il est crucial de reconnaître que le développement local repose également sur ces entités, qui peuvent offrir des opportunités aux fins de faciliter l'intégration de la Diaspora dans les projets nationaux. <br>
                        dont les préoccupations étaient Enfin, la Côte d'Ivoire, riche en ressources naturelles et humaines, a pour ambition de diversifier son économie et d'assurer un développement durable et inclusif. La participation active de la Diaspora est essentielle pour atteindre ces objectifs. 
                    </p>

                    <p class="p-justify">
                        Le Sénat et le Ministère Delégué en charge de l'Intégration Africaine et des Ivoiriens de l'Extérieur co-organisent à la Fondation Félix HOUPHOUËT-BOIGNY pour la Recherche de la Paix de Yamoussoukro, le Forum de la Diaspora, les 12 et 13 novembre 2024, afin de renforcer les liens entre la Diaspora et la mère patrie, et de structurer les mécanismes de soutien et de collaboration pour un développement durable de la Côte d'Ivoire.
                    </p>
                    </div>
                </div>
            </div>

            <!-- JUSTIFICATION -->
            <div class="row gx-lg-5 gy-5 mb-5">
                <div class="col-lg-12">
                    <div class="news-right">
                        <h4 class="mb-2">JUSTIFICATION</h4>

                        <p class="p-justify decal-2 ">
                            <span class="pink fw-semibold">1.	Reconnaissance du rôle de la Diaspora :</span> la Diaspora ivoirienne contribue de manière significative à l'économie nationale. En 2023, les transferts de fonds des Ivoiriens de l'étranger ont représenté environ 1,2 % du PIB et favorisant les investissements dans des secteurs clés comme l'éducation, la santé et le logement. <br> Le Forum vise à valoriser cette contribution et à renforcer le rôle de la Diaspora dans le développement national.
                        </p>
    
                        <p class="p-justify decal-2">
                            <span class="pink fw-semibold">2.	 Développement économique et investissements : </span> les Ivoiriens de l'étranger disposent de compétences diversifiées et de réseaux internationaux pouvant être mobilisés pour le développement durable de la Côte d'Ivoire.  <br>
                            En facilitant les investissements de la Diaspora, le Forum contribuera à dynamiser l'économie, à créer des emplois et à promouvoir l'innovation. Les mécanismes d'appui qui seront présentés, permettront de lever les obstacles à l'investissement et de fournir les ressources nécessaires pour des projets viables et durables.
                        </p>
    
                        <p class="p-justify decal-2">
                            <span class="pink fw-semibold">3.	Développement durable :  </span> la Côte d'Ivoire s'est engagée à atteindre les Objectifs de Développement Durable (ODD) fixés par les Nations Unies. La Diaspora, forte son expérience des meilleures pratiques internationales en matière de développement durable, peut apporter une expertise précieuse pour la mise en œuvre de projets écologiques et socialement responsables. Le Forum mettra en lumière les initiatives de développement durable et encouragera les projets qui respectent les principes de l'économie verte.
                        </p>
    
                        <p class="p-justify decal-2">
                            <span class="pink fw-semibold">4.	Renforcement de l'identité nationale et de la culture : </span> la promotion de la culture ivoirienne par la diaspora renforce l'identité nationale et contribue au rayonnement international du pays. Le Forum permettra de valoriser les initiatives culturelles et de renforcer les liens entre les Ivoiriens de l'intérieur et ceux de l'extérieur. Il s'agira également de promouvoir le patrimoine culturel et l'industrie sportive de la Côte d'Ivoire, de soutenir les artistes et créateurs locaux et de diffuser la culture  à travers le monde.
                        </p>
    
                        <p class="p-justify decal-2">
                            <span class="pink fw-semibold">5.	Cohésion sociale et solidarité nationale : </span> le Forum vise à renforcer la solidarité entre les Ivoiriens de la diaspora et ceux vivant en Côte d'Ivoire. En créant un espace de dialogue et de collaboration, il contribuera à une meilleure compréhension mutuelle et à une meilleure intégration de la Diaspora dans le tissu socio-économique. Les échanges d'expériences et de bonnes pratiques favoriseront une dynamique positive de développement inclusif, où chaque Ivoirien, où qu'il se trouve, pourra contribuer au progrès de la nation.
                        </p>
    
                        <p class="p-justify decal-2">
                            <span class="pink fw-semibold">6.	6.	Innovation et partage de connaissances  : </span> le Forum sera une plateforme d'échanges d'idées innovantes et de partage de connaissances. Les membres de la Diaspora, souvent imprégnés de technologies de pointe et de pratiques de gestion avancées, peuvent apporter des solutions innovantes aux défis auxquels la Côte d'Ivoire est confrontée. Les discussions porteront sur l'adaptation de ces innovations au contexte ivoirien et sur leur mise en œuvre pour améliorer les conditions de vie des populations locales. <br>
                            In fine, le Forum de la Diaspora, prévu pour les <span class="pink">12 et 13</span> novembre 2024 à la Fondation Félix HOUPHOUËT-BOIGNY pour la Recherche de la Paix de Yamoussoukro, est une initiative stratégique visant à mobiliser les ressources et les talents de la Diaspora ivoirienne pour le développement durable de la Côte d'Ivoire. <br>
                            En reconnaissant officiellement la contribution de la Diaspora et en mettant en place des mécanismes de soutien et de collaboration, ce Forum marque une étape importante vers une Côte d'Ivoire plus inclusive, prospère et durable.
                        </p>

                    </div>
                </div>
            </div>

            <!-- OBJECTIF GÉNÉRAL-->
            <div class="row gx-lg-5 gy-5 mb-5">
                <div class="col-lg-12">
                    <div class="news-right">
                        <h4 class="mb-2">OBJECTIF GÉNÉRAL</h4>

                        <p class="p-justify decal-2 ">
                            Le Forum de la Diaspora est une plateforme inclusive et interactive dont l'objectif général est de renforcer les liens entre la diaspora ivoirienne et la Côte d'Ivoire, en mettant en place des mécanismes de soutien et des stratégies pour accroître l'attractivité des territoires ivoiriens, dans le but de favoriser un développement durable et harmonieux du pays.
                        </p>

                    </div>
                </div>
            </div>

            <!-- OBJECTIFS SPÉCIFIQUES-->
            <div class="row gx-lg-5 gy-5 mb-5">
                <div class="col-lg-12">
                    <div class="news-right">
                        <h4 class="mb-2">OBJECTIFS SPÉCIFIQUES</h4>

                        <p class="p-justify decal-2 ">
                            <span class="pink fw-semibold">1.	Faciliter le dialogue et l'échange : </span> Mettre en place un cadre de dialogue entre les représentants de la Diaspora, le Sénat et le Ministère des Affaires Étrangères de l'Intégration Africaine et des Ivoiriens de l'Extérieur, pour mieux comprendre et répondre aux attentes et besoins des Ivoiriens de l'étranger.
                        </p>

                        <p class="p-justify decal-2 ">
                            <span class="pink fw-semibold">2.	Encourager les investissements : </span> Présenter les opportunités d'investissement en Côte d'Ivoire et les mécanismes de soutien disponibles pour encourager les initiatives économiques des membres de la diaspora.
                        </p>

                        <p class="p-justify decal-2 ">
                            <span class="pink fw-semibold">3.	Promouvoir le développement durable : </span> Intégrer les compétences et les ressources de la diaspora dans les projets de développement durable, en mettant en avant des stratégies écologiques et responsables.
                        </p>

                        <p class="p-justify decal-2 ">
                            <span class="pink fw-semibold">4.	Valoriser la culture ivoirienne : </span> Intégrer les compétences et les ressources de la diaspora dans les projets de développement durable, en mettant en avant des stratégies écologiques et responsables.
                        </p>

                        <p class="p-justify decal-2 ">
                            <span class="pink fw-semibold">5.	Renforcer la coopération : </span> Établir des partenariats concrets entre la Diaspora et les institutions ivoiriennes, facilitant ainsi l'échange de connaissances et de compétences pour le développement du pays.
                        </p>

                    </div>
                </div>
            </div>

            <!-- RÉSULTATS ATTENDUS -->
            <div class="row gx-lg-5 gy-5 mb-5">
                <div class="col-lg-12">
                    <div class="news-right">
                        <h4 class="mb-2">RÉSULTATS ATTENDUS</h4>

                        <p class="p-justify decal-2 ">
                            Les résultats attendus au terme du Forum se déclinent comme suit :
                        </p>

                        <p class="p-justify decal-2 ">
                            <span class="pink fw-semibold">I.	Le cadre de dialogue structuré et régulier entre les représentants de la Diaspora et les institutions ivoiriennes est mis en place  </span> <br> 
                            <span class="decal-2">
                                Ce cadre de dialogue permettra de mieux comprendre les attentes et les besoins de la Diaspora, favorisant ainsi une meilleure prise en compte de leurs préoccupations dans les politiques publiques. Il créera également un espace où les membres de la Diaspora peuvent exprimer leurs idées, proposer des projets et collaborer directement avec les autorités locales et nationales. Un dialogue régulier renforce la confiance et l'engagement mutuel, essentiels pour une coopération efficace.
                            </span>
                        </p>

                        <p class="p-justify decal-2 ">
                            <span class="pink fw-semibold">II.	Les investissements de la Diaspora dans divers secteurs économiques en Côte d'Ivoire ont augmenté grâce à une meilleure connaissance des opportunités et des mécanismes de soutien.  </span> <br> 
                            <span class="decal-2">
                                En présentant les opportunités d'investissement et en clarifiant les mécanismes de soutien, le Forum encouragera les membres de la diaspora à investir en Côte d'Ivoire. Cela contribuera à la diversification de l'économie, à la création d'emplois et à la stimulation de la croissance économique. Les investissements de la diaspora apporteront non seulement des capitaux, mais aussi des compétences et des technologies nouvelles, renforçant ainsi la compétitivité du pays.
                            </span>
                        </p>

                        <p class="p-justify decal-2 ">
                            <span class="pink fw-semibold">III.	L'intégration des principes de développement durable dans les projets initiés par la Diaspora est accrue avec un accent sur les initiatives écologiques et responsables.</span> <br> 
                            <span class="decal-2">
                                En mettant en avant des stratégies écologiques et responsables, le Forum sensibilisera les membres de la Diaspora à l'importance du développement durable. Les projets initiés par la Diaspora qui intègrent ces principes contribueront à la préservation de l'environnement, à l'amélioration des conditions de vie des populations locales et à la durabilité des ressources naturelles. <br>
                                Cela permettra également à la Côte d'Ivoire de se positionner comme un leader en matière de développement durable en Afrique.
                            </span>
                        </p>

                        <p class="p-justify decal-2 ">
                            <span class="pink fw-semibold">IV.	L'identité nationale et promotion de la culture ivoirienne à travers des initiatives portées par la Diaspora est renforcée</span> <br> 
                            <span class="decal-2">
                                La valorisation de la culture ivoirienne à travers les initiatives de la diaspora contribuera à renforcer l'identité nationale et à promouvoir le patrimoine culturel du pays à l'international. Les membres de la Diaspora peuvent jouer un rôle clé en diffusant la culture ivoirienne, en organisant des événements culturels et en soutenant les artistes et créateurs locaux. Cela renforcera également le sentiment d'appartenance et de fierté nationale parmi les Ivoiriens, tant à l'intérieur qu'à l'extérieur du pays.
                            </span>
                        </p>

                        <p class="p-justify decal-2 ">
                            <span class="pink fw-semibold">V.	5.	Des partenariats concrets et durables entre la Diaspora et les institutions ivoiriennes sont  établis, facilitant l'échange de connaissances et de compétences.</span> <br> 
                            <span class="decal-2">
                                Les partenariats concrets et durables permettront de capitaliser sur les compétences, les expériences et les ressources de la Diaspora pour le développement de la Côte d'Ivoire. Ces partenariats faciliteront l'échange de bonnes pratiques, la mise en œuvre de projets innovants et le renforcement des capacités institutionnelles. Une coopération renforcée favorisera également la création de réseaux professionnels et académiques, augmentant ainsi les opportunités de développement et de croissance pour le pays.
                            </span>
                        </p>

                        <p class="p-justify">
                            Les résultats attendus du Forum de la Diaspora visent donc à créer un environnement propice à la collaboration et à l'engagement actif de la Diaspora dans le développement durable de la Côte d'Ivoire. En facilitant le dialogue, en encourageant les investissements, en promouvant le développement durable, en valorisant la culture et en renforçant la coopération, ce Forum contribuera de manière significative à l'épanouissement socio-économique du pays.
                        </p>

                    </div>
                </div>
            </div>

            <!-- <div class="row gx-lg-5 gy-5">
                <div class="col-lg-12">
                    <div class="news-right">
                        <div class="about-organizer p-6 box-shadow rounded text-center mb-6">
                            <div class="organizer-title mb-3">
                                <h6>Concernant les organisateurs</h6>
                            </div>
                            <div class="sperator w-20 border-bottom border-2 border-pink m-auto"></div>
                            <div class="container-fluid" style="margin: -10% 0 -13% 0 !important">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <img src="{{asset('assets/images/logo/senat.png')}}" alt="" width="100%">
                                    </div>
                                    <div class="col-lg-6">
                                        <img src="{{asset('assets/images/logo/ae.png')}}" alt="" width="100%">
                                    </div>
                                </div>
                            </div>
                            <div
                                class="organizer-bio pb-5 mb-4 border-bottom border-2 border-grey border-opacity-25 border-bottom-dashed">
                                <h6 class="mb-1">Le forum de la DIASPORA IVOIRIENNE est portée par 2 entitées maîtresse, e, matière de DIASPORA, le SENAT pour [...] et la DGIE pour son expertise en la question de [...]</h6>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>



@endsection