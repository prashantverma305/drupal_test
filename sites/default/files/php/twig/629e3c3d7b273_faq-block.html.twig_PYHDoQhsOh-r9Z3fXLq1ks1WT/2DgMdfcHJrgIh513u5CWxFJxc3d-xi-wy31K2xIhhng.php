<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/custom/accenture_common/templates/faq-block.html.twig */
class __TwigTemplate_c0f9bca7224b68136fabcabc4cc999d18805cf0c0e37dd37c32e57a7dade7c3a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"container\">
    <div class=\"row content-tween\">
    <div class=\"col-12 col-lg-8 mx-auto fixedoverflowcontainerfaq content-tween-item\">
        <div class=\"fixedoverflowcover\">
            <div class=\"nav nav-pills nav-fill navcontcover\">
                <a class=\"nav-item nav-link active\" data-toggle=\"tab\" href=\"#contmenu0\">Malaysia’s 5G rollout and <br class=\"d-none d-lg-block\">the role of Lorem Ipsum  Berhad</a>
                <a class=\"nav-item nav-link\" data-toggle=\"tab\" href=\"#contmenu1\">The Single <br class=\"d-none d-lg-block\">Wholesale Network</a>
                <a class=\"nav-item nav-link\" data-toggle=\"tab\" href=\"#contmenu2\">Multi-Operator <br class=\"d-none d-lg-block\">Core Network (MOCN)</a>
            </div>
        </div>
    </div>
    </div>
    <div class=\"row mt-4 pt-lg-2\">
    <div class=\"col-12 col-lg-8 mx-auto text-left\">
        <div class=\"tab-content\">
            <div class=\"tab-pane fade show active content-tween\" id=\"contmenu0\">
                <div id=\"oneaccordion\" class=\"myaccordion\">
                <div class=\"card content-tween-item\">
                    <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faqcont01\">
                        <div class=\"row\">
                            <div class=\"col my-auto\">
                            <h3>What is Lorem Ipsum  Berhad’s role?</h3>
                            </div>
                            <div class=\"col-auto text-right mb-auto\">
                            <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id=\"faqcont01\" class=\"collapse\" data-parent=\"#oneaccordion\">
                        <div class=\"card-body\">
                            <p>
                            Lorem Ipsum (DNB) which is wholly owned by the Minister of Finance (Incorporated) has been mandated by the Government of Malaysia to be the single neutral party to undertake the deployment of 5G infrastructure and network nationwide and is licensed under the Communications and Multimedia Act 1998 (the Act) to provide wholesale 5G coverage and capacity to other licensees under the Act.
                            </p>
                            <p>
                            DNB was established to assist in delivering the following key outcomes in line with the MyDigital aspirations to:
                            </p>
                            <ul class=\"listdash\">
                            <li>Accelerate deployment of 5G infrastructure and network in Malaysia</li>
                            <li>Realise the potential of 5G in Malaysia to spur economic activity</li>
                            <li>Narrow the urban-rural digital divide and improve the current state of infrastructure</li>
                            <li>Avoid duplication of infrastructure and optimise the use of scarce resources</li>
                            <li>Promote service-based competition within the telecommunications industry</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"card content-tween-item\">
                    <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faqcont02\">
                        <div class=\"row\">
                            <div class=\"col my-auto\">
                            <h3>Whom will DNB be working with to extend 5G coverage across the country?</h3>
                            </div>
                            <div class=\"col-auto text-right mb-auto\">
                            <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id=\"faqcont02\" class=\"collapse\" data-parent=\"#oneaccordion\">
                        <div class=\"card-body\">
                            <p>
                            DNB will collaborate with relevant stakeholders including government, regulators, state and local authorities, network equipment providers, telecommunications operators, infrastructure owners, as well as various user groups which will benefit from the use of 5G products and services.
                            </p>
                            <p>
                            These stakeholders include Ericsson, the appointed network equipment provider (NEP), mobile network operators (MNOs) and other licensees, site owners, fibre optics providers, power and utility players, as well as financial institutions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"card content-tween-item\">
                    <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faqcont03\">
                        <div class=\"row\">
                            <div class=\"col my-auto\">
                            <h3>What are some of the key considerations in the deployment of the 5G network?</h3>
                            </div>
                            <div class=\"col-auto text-right mb-auto\">
                            <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id=\"faqcont03\" class=\"collapse\" data-parent=\"#oneaccordion\">
                        <div class=\"card-body\">
                            <p>
                            DNB will deploy an end-to-end nationwide network in line with the following business principles:
                            </p>
                            <ul class=\"romanlower mt-3\">
                            <li>To adopt a multi-operator core network (MOCN) model, in addition to leveraging existing sites and fiber networks;</li>
                            <li>To implement a supply-led rollout strategy to accelerate nationwide coverage and adoption</li>
                            <li>To help reduce cost to serve for licensees, driven by spectral efficiency and by eliminating the need for the duplication of assets through the SWN model</li>
                            <li>To encourage MNOs and other licensees to shift away from infrastructure-based competition, towards a more service-oriented business model; and</li>
                            <li>To catalyse 5G enterprise-grade application adoption and innovation by orchestrating the necessary ecosystem and multi-model support systems.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"card content-tween-item\">
                    <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faqcont04\">
                        <div class=\"row\">
                            <div class=\"col my-auto\">
                            <h3>
                                What are the key service offerings that the public can expect from the 5G rollout?
                            </h3>
                            </div>
                            <div class=\"col-auto text-right mb-auto\">
                            <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id=\"faqcont04\" class=\"collapse\" data-parent=\"#oneaccordion\">
                        <div class=\"card-body\">
                            <p>
                            DNB will enable key 5G capabilities which are Enhanced Mobile Broadband (eMBB), Massive Machine Type Communication (mMTC), Ultra-Reliable Low-Latency Communication (uRLLC), and Network Slicing.​ 
                            </p>
                            <p>
                            This will include the underlying 5G capabilities such as artificial intelligence/machine learning (AI/ML), robotics and augmented reality and virtual reality (AR/VR) which will enable innovation that drives efficiency, service enablement and new experiences in various verticals.​ 
                            </p>
                            <p>
                            The key 5G capabilities are explained below:​ 
                            </p>
                            <ul class=\"romanlower\">
                            <li><strong>Enhanced Mobile Broadband (eMBB):</strong> Quite simply, the provision of mobile data, but at greater scale than before. 5G coverage will build on the speed and low-latency gains made by 4G to deliver even faster downlink and uplink speeds, and even lower latency. These gains can be experienced on 5G-enabled devices. eMBB makes any internet-based activity – whether accessing apps, email, websites, watching videos, and updating software – much faster and more seamless.​ </li>
                            <li><strong>Ultra-reliable, low latency communication (URLLC):</strong> This is defined by the 3GPP as a user plane latency of no more than 1 millisecond. URLLC makes it possible to support use cases that require very high reliability and extremely low latency such as industrial automation, intelligent transportation, and remote medical diagnosis and surgery.​ </li>
                            <li><strong>Massive Machine Type Communications (mMTC): </strong> mMTC is all about developing connectivity for large numbers of low-cost, low-energy devices or sensors in the context of the Internet of Things (IoT).​</li>
                            <li>Network Slicing allows 5G infrastructure to be shared by multiple logical networks with each one tailored to fit a defined business purpose, creating new revenue opportunities for communication service providers with better security, faster service delivery, and improved flexibility.​ </li>
                            </ul>
                            <p>DNB will also facilitate collaboration with industry stakeholders to identify key verticals as well as co-create unique, resilient, and proprietary applications for the consumer and enterprise segments.​ </p>
                            <p>Additionally, DNB will facilitate the deployment of fixed wireless access (FWA) to address last mile connectivity, particularly for rural and outlying areas of the country. With FWA technology, DNB will be able to extend 5G coverage to homes and businesses in areas where fibre deployment is not feasible.​ </p>
                            <p>This will promote greater digital inclusivity, allowing rural communities to participate in and benefit from Malaysia’s growing digital economy.​ </p>
                        </div>
                    </div>
                </div>
                <div class=\"card content-tween-item\">
                    <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faqcont05\">
                        <div class=\"row\">
                            <div class=\"col my-auto\">
                            <h3>How much is the 5G rollout expected to cost, and over how long a period of time? </h3>
                            </div>
                            <div class=\"col-auto text-right mb-auto\">
                            <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id=\"faqcont05\" class=\"collapse\" data-parent=\"#oneaccordion\">
                        <div class=\"card-body\">
                            <p>The entire 5G network rollout is expected to cost RM16.5 billion over the next 10 years. This is made up of RM12.5 billion for the 5G network equipment and infrastructure as well as RM4 billion in corporate costs.​ </p>
                            <p>The RM12.5 billion is broken down into a RM4 billion payment to Ericsson as the Network Equipment Provider (NEP), as well as RM8.5 billion for infrastructure development over the next 10 years. Of the RM4 billion payment to Ericsson, roughly RM2.3 billion will remain in the country. Meanwhile, of the RM8.5 billion, an estimated RM4 billion goes to site owners and tower infrastructure companies, roughly RM2.5 billion is meant for the laying of additional fibre, RM1 billion for power supply, and another estimated RM1 billion in apparatus assignment fees to the Malaysian Communications and Multimedia Commission (MCMC).​ </p>
                            <p>The vast majority of these funds will remain in-country and circulate throughout the local economy. In fact, most of these funds will flow to the domestic telecommunications ecosystem.​ </p>
                            <p>The RM 12.5 billion cost compares favorably against the cost estimates in the MyDIGITAL Blueprint and the National 5G Task Force Report of December 2019. The Task Force Report found that the incremental cost to upgrade just one 4G network in Malaysia to 5G would cost about RM7.5 billion. Based on the Task Force’s estimates, the deployment of the 5G Network collectively by the 4 major existing telcos would likely cost in excess of RM30 billion.​ </p>
                            <p>Besides capital expenditure (CAPEX) to build the 5G Coverage Network of RM12.5 billion, the corporate and operating expenditure (OPEX) to run the 5G Network over the 10 years is estimated at RM4 billion. This comprises, among others, staff costs, professional fees, data centre expenditure, insurance coverage, as well as marketing and promotional expenditure. This brings the cost of rollout of the 5G network and infrastructure over the next 10 years to RM16.5 billion.​ </p>
                        </div>
                    </div>
                </div>
                <div class=\"card content-tween-item\">
                    <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faqcont05a\">
                        <div class=\"row\">
                            <div class=\"col my-auto\">
                            <h3>How does DNB plan to finance the 5G network rollout?</h3>
                            </div>
                            <div class=\"col-auto text-right mb-auto\">
                            <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id=\"faqcont05a\" class=\"collapse\" data-parent=\"#oneaccordion\">
                        <div class=\"card-body\">
                            <p>The total cost for the 5G deployment will be financed exclusively by the private sector, with no Government funding or development expenditure involved.​ </p>
                            <p>On 12th November 2021 , DNB announced the securing of a working capital financing package of up to RM400 million from Deutsche Bank. It a RM150 million bank guarantee line, to be issued by Deutsche Bank AG, Labuan Branch, and a RM250 million revolving credit facility to be extended by Deutsche Bank (Malaysia) Berhad on an unsecured basis.​ </p>
                            <p>The facility will provide DNB with access to short-term financing for working capital requirements, mainly to support the company’s daily operations and capital expenditure.​ </p>
                            <p>The RM400 million financing package forms part of the estimated RM5 billion total working capital facilities that DNB will require between now and 2024 in order to roll out the planned 5G network.​ </p>
                            <p>In October 2021, United Overseas Bank (Malaysia) Bhd (UOB Malaysia) announced it had provided Ericsson (Malaysia) Sdn Bhd with a first tranche financing in the form of an RM800 million receivables purchase arrangement (RPA).​ </p>
                            <p>With the financing, Ericsson Malaysia will deliver the initial phases of Lorem Ipsum  Bhd's (DNB) nationwide 5G network rollout.​ </p>
                            <p>UOB Malaysia has also been mandated as the lead arranger for an additional RM2.3 billion syndicated RPA for potential financial institutions (FIs).​ </p>
                            <p>Upon acceptance of the syndicated RPA by the participating FIs, a total of RM3.1 billion will be raised in support of the supply, delivery, and management of DNB's entire 5G network.​ </p>
                            <p>DNB intends to establish an RM5 billion Sukuk programme in 2022, which is intended to replace the working capital facilities and to facilitate repayment of the RPA.​ </p>
                            <p>More announcements will be made as and when key financing milestones are achieved.​ </p>
                        </div>
                    </div>
                </div>
                <div class=\"card content-tween-item\">
                    <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faqcont06\">
                        <div class=\"row\">
                            <div class=\"col my-auto\">
                            <h3>How does the country stand to benefit from 5G coverage?</h3>
                            </div>
                            <div class=\"col-auto text-right mb-auto\">
                            <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id=\"faqcont06\" class=\"collapse\" data-parent=\"#oneaccordion\">
                        <div class=\"card-body\">
                            <p>The digital transformation catalysed by 5G coverage stands to create a potential GDP uplift of some RM150 billion and a further 750,000 new jobs by the year 2030.​ </p>
                            <p>In addition to the long-term GDP and job opportunities, other key socioeconomic benefits include:​ </p>
                            <ul class=\"romanlower\">
                            <li>Enabling the creation of more than 14,800 jobs across the economy in 2022 through DNB's investment and increased demand placed on the sector's supply chain​ </li>
                            <li>Facilitating domestic vendor participation by involving them in the supply of various NEP-related services </li>
                            <li>Seeding invaluable knowledge building programmes for industry, government, and academia </li>
                            <li>Developing a 5G Experiential Centre and Innovation Lab to showcase 5G use cases and fast track the development of tech start-ups​ </li>
                            </ul>
                            <p>
                            DNB has identified several major industries that could be early beneficiaries of the 5G deployment, including oil and gas, ports, tourism, education, healthcare, agriculture, manufacturing, retail, as well as power and utilities.​ 
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"card content-tween-item\">
                    <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faqcont07\">
                        <div class=\"row\">
                            <div class=\"col my-auto\">
                            <h3>What is the 5G rollout timeline for Malaysia?</h3>
                            </div>
                            <div class=\"col-auto text-right mb-auto\">
                            <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id=\"faqcont07\" class=\"collapse\" data-parent=\"#oneaccordion\">
                        <div class=\"card-body\">
                            <p>
                            5G services will be available in Putrajaya, Cyberjaya and parts of Kuala Lumpur in December 2021. Thereafter, it is planned to reach approximately 40% coverage in populated areas by the end of 2022 and subsequently will be extended nationwide to cover other urban and rural areas and industrial parks, with a target of approximately 80% coverage in populated areas by 2024. These plans are presently being finalised and more details will be shared upon approval of the plans by the MCMC.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"card content-tween-item\">
                    <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faqcont08\">
                        <div class=\"row\">
                            <div class=\"col my-auto\">
                            <h3>What is being done to ensure the 5G network meets industry standards for cybersecurity?</h3>
                            </div>
                            <div class=\"col-auto text-right mb-auto\">
                            <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id=\"faqcont08\" class=\"collapse\" data-parent=\"#oneaccordion\">
                        <div class=\"card-body\">
                            <p>Keeping 5G networks secure from cybersecurity threats is critical to realising its full-fledged benefits to consumers, organisations, and enterprises in the long run. 5G connectivity must therefore be consistent and reliable.</p>
                            <p>DNB understands the significant cybersecurity risk and adversarial interest from a range of threat actors towards DNB, critical national infrastructure (CNI) and 5G telecommunications organisations.</p>
                            <p>With this in mind, the Cybersecurity Office was created as part of DNB’s mandate to securely deploy the nation’s 5G telecommunications infrastructure. The Cybersecurity Office is critical to ensuring the safety, security, and digital resilience of the organisation, the services offered, and the data managed.</p>
                            <p>The Cybersecurity Office is empowered to ensure that DNB’s 5G network is resilient against cyberattacks. This includes not only the ability to detect threats, but to recover from them, and comply with both domestic and international laws, regulations, and standards.</p>
                            <p>DNB’s Cybersecurity Office covers the following four focus areas:</p>
                            <ul class=\"romanlower\">
                            <li>Protect, Shield, Defend, and Prevent cyberattacks in the organisation</li>
                            <li>Monitor, Detect, and Hunt malicious and potentially damaging activities</li>
                            <li>Respond, Recover, and Sustain operations in the event of a significant incident</li>
                            <li>Govern, Manage and Comply with regulatory and cybersecurity risk requirements</li>
                            </ul>
                            <p>
                            DNB is committed to the adoption of international standards (e.g. NIST, 3GPP, GSMA) and collaboration with not just regulators, but the broader ecosystem, robust internal education, as well as a 24/7 Security Operations Centre.
                            </p>
                        </div>
                    </div>
                </div>
                <br/>
                <button class=\"btn btn-primary\" type=\"button\">Load More</button>
                </div>
            </div>
            <div class=\"tab-pane fade\" id=\"contmenu1\">
                <div id=\"twoaccordion\" class=\"myaccordion\">
                <div class=\"card\">
                    <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faq2cont01\">
                        <div class=\"row\">
                            <div class=\"col my-auto\">
                            <h3>How will 5G be rolled out in Malaysia?</h3>
                            </div>
                            <div class=\"col-auto text-right mb-auto\">
                            <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id=\"faq2cont01\" class=\"collapse\" data-parent=\"#twoaccordion\">
                        <div class=\"card-body\">
                            <p>The 5G rollout will be implemented as a Single Wholesale Network (SWN).</p>
                            <p>Simply put, a 5G SWN refers to the provision of nationwide 5G coverage, delivered via one common network, to which all MCMC licensees in Malaysia can seek equal access on a wholesale basis. This common network will be built, owned, and operated by DNB. DNB will work closely with the appointed Network Equipment Provider (NEP) Ericsson, for the design, build, and maintenance of the 5G network.</p>
                            <p>Eligible licensees will be able to integrate their networks and infrastructure with the new single wholesale network established.</p>
                        </div>
                    </div>
                </div>
                <div class=\"card\">
                    <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faq2cont02\">
                        <div class=\"row\">
                            <div class=\"col my-auto\">
                            <h3>What makes the Single Wholesale Network (SWN) model suitable for Malaysia’s 5G rollout?</h3>
                            </div>
                            <div class=\"col-auto text-right mb-auto\">
                            <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id=\"faq2cont02\" class=\"collapse\" data-parent=\"#twoaccordion\">
                        <div class=\"card-body\">
                            <p>
                            The deployment of 5G network via a single entity was deliberated and considered earlier by the industry and MCMC as reflected in MCMC’s Public Inquiry report on “Allocation of spectrum bands for mobile broadband service in Malaysia”, published on 31st December 2019,   which was intended to lower the capital expenditure (“CAPEX’) by minimising costs and preventing the duplication of infrastructure, especially when improvements  and expansion of the 4G networks are still on-going under the Jalinan Digital Negara (JENDELA) initiative.
                            </p>
                            <p>
                            The establishment of Lorem Ipsum as a Single Wholesale Network is to assist in delivering the following key outcomes in line with the MyDigital aspirations, which are to:
                            </p>
                            <ul>
                            <li>Accelerate deployment of 5G infrastructure and network in Malaysia</li>
                            <li>Realise the potential of 5G in Malaysia to spur economic activity</li>
                            <li>Narrow the urban-rural digital divide and improve the current state of infrastructure</li>
                            <li>Avoid duplication of infrastructure and optimise the use of scarce resources</li>
                            <li>Promote service-based competition within the telecommunications industry</li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class=\"tab-pane fade\" id=\"contmenu2\">
                <div id=\"twoaccordion\" class=\"myaccordion\">
                <div class=\"card\">
                    <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faq3cont01\">
                        <div class=\"row\">
                            <div class=\"col my-auto\">
                            <h3>What technical architecture is DNB applying for the 5G rollout? </h3>
                            </div>
                            <div class=\"col-auto text-right mb-auto\">
                            <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id=\"faq3cont01\" class=\"collapse\" data-parent=\"#twoaccordion\">
                        <div class=\"card-body\">
                            <p>The 5G network will be rolled out with a 3GPP-approved Multi-Operator Core Network (MOCN) architecture.​ </p>
                            <p>MOCN emphasises the sharing of both network infrastructure and valuable spectrum resources.​ </p>
                            <p>It ensures that 5G services are delivered to telcos at a lower cost per GB than the present 4G standard. In turn, end users will have access to ultrafast, high quality, and affordable internet speeds.​ </p>
                            <p>This is in line with the government’s mandate to accelerate the deployment of 5G, making it available throughout Malaysia in order to bridge the urban-rural digital divide. </p>
                        </div>
                    </div>
                </div>
                <div class=\"card\">
                    <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faq3cont02\">
                        <div class=\"row\">
                            <div class=\"col my-auto\">
                            <h3>How does MOCN work?</h3>
                            </div>
                            <div class=\"col-auto text-right mb-auto\">
                            <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id=\"faq3cont02\" class=\"collapse\" data-parent=\"#twoaccordion\">
                        <div class=\"card-body\">
                            <p>An increasingly common rollout strategy, the MOCN model is a global telecommunications standard defined by the 3GPP , that allows a single network infrastructure or Radio Access Network (RAN) (which is the case with DNB) to be shared and connected to multiple telco core networks.​ </p>
                            <p>To use an analogy, the government in the past had allocated individual lanes (spectrum) to each telco. Based on the lanes provisioned by the government, the telcos would then build their own separate highways (network and infrastructure) for their users.​ </p>
                            <p>However, with vastly increased data demands within the country in recent years, these individual highways can be prone to congestion. Meanwhile, users on one highway are unable to get onto other less congested highways.​ </p>
                            <p>In the case of 5G, the MCMC has provided all the available lanes (5G spectrum) to DNB, allowing for the building of a single, seamless “superhighway” that is both secure and adaptable as the peak can be managed across all of DNB’s customers.​ </p>
                            <p>This 5G superhighway entails the rollout of a single seamless infrastructure comprising of the radio unit, power, and fibre connectivity which will serve all telcos equally on a wholesale basis. </p>
                        </div>
                    </div>
                </div>
                <div class=\"card\">
                    <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faq3cont03\">
                        <div class=\"row\">
                            <div class=\"col my-auto\">
                            <h3>What technical architecture is DNB applying for the 5G rollout? </h3>
                            </div>
                            <div class=\"col-auto text-right mb-auto\">
                            <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id=\"faq3cont03\" class=\"collapse\" data-parent=\"#twoaccordion\">
                        <div class=\"card-body\">
                            <p>Malaysia's 5G MOCN model is a global technical milestone because it successfully integrated DNB's RAN Core to five telcos' core networks, with a sixth to follow soon.​ </p>
                            <p>Prior to the Malaysian 5G MOCN experience, integrations in other countries had only ever been done with two telcos. </p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/accenture_common/templates/faq-block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row content-tween\">
    <div class=\"col-12 col-lg-8 mx-auto fixedoverflowcontainerfaq content-tween-item\">
        <div class=\"fixedoverflowcover\">
            <div class=\"nav nav-pills nav-fill navcontcover\">
                <a class=\"nav-item nav-link active\" data-toggle=\"tab\" href=\"#contmenu0\">Malaysia’s 5G rollout and <br class=\"d-none d-lg-block\">the role of Lorem Ipsum  Berhad</a>
                <a class=\"nav-item nav-link\" data-toggle=\"tab\" href=\"#contmenu1\">The Single <br class=\"d-none d-lg-block\">Wholesale Network</a>
                <a class=\"nav-item nav-link\" data-toggle=\"tab\" href=\"#contmenu2\">Multi-Operator <br class=\"d-none d-lg-block\">Core Network (MOCN)</a>
            </div>
        </div>
    </div>
    </div>
    <div class=\"row mt-4 pt-lg-2\">
    <div class=\"col-12 col-lg-8 mx-auto text-left\">
        <div class=\"tab-content\">
            <div class=\"tab-pane fade show active content-tween\" id=\"contmenu0\">
                <div id=\"oneaccordion\" class=\"myaccordion\">
                <div class=\"card content-tween-item\">
                    <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faqcont01\">
                        <div class=\"row\">
                            <div class=\"col my-auto\">
                            <h3>What is Lorem Ipsum  Berhad’s role?</h3>
                            </div>
                            <div class=\"col-auto text-right mb-auto\">
                            <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id=\"faqcont01\" class=\"collapse\" data-parent=\"#oneaccordion\">
                        <div class=\"card-body\">
                            <p>
                            Lorem Ipsum (DNB) which is wholly owned by the Minister of Finance (Incorporated) has been mandated by the Government of Malaysia to be the single neutral party to undertake the deployment of 5G infrastructure and network nationwide and is licensed under the Communications and Multimedia Act 1998 (the Act) to provide wholesale 5G coverage and capacity to other licensees under the Act.
                            </p>
                            <p>
                            DNB was established to assist in delivering the following key outcomes in line with the MyDigital aspirations to:
                            </p>
                            <ul class=\"listdash\">
                            <li>Accelerate deployment of 5G infrastructure and network in Malaysia</li>
                            <li>Realise the potential of 5G in Malaysia to spur economic activity</li>
                            <li>Narrow the urban-rural digital divide and improve the current state of infrastructure</li>
                            <li>Avoid duplication of infrastructure and optimise the use of scarce resources</li>
                            <li>Promote service-based competition within the telecommunications industry</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"card content-tween-item\">
                    <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faqcont02\">
                        <div class=\"row\">
                            <div class=\"col my-auto\">
                            <h3>Whom will DNB be working with to extend 5G coverage across the country?</h3>
                            </div>
                            <div class=\"col-auto text-right mb-auto\">
                            <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id=\"faqcont02\" class=\"collapse\" data-parent=\"#oneaccordion\">
                        <div class=\"card-body\">
                            <p>
                            DNB will collaborate with relevant stakeholders including government, regulators, state and local authorities, network equipment providers, telecommunications operators, infrastructure owners, as well as various user groups which will benefit from the use of 5G products and services.
                            </p>
                            <p>
                            These stakeholders include Ericsson, the appointed network equipment provider (NEP), mobile network operators (MNOs) and other licensees, site owners, fibre optics providers, power and utility players, as well as financial institutions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"card content-tween-item\">
                    <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faqcont03\">
                        <div class=\"row\">
                            <div class=\"col my-auto\">
                            <h3>What are some of the key considerations in the deployment of the 5G network?</h3>
                            </div>
                            <div class=\"col-auto text-right mb-auto\">
                            <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id=\"faqcont03\" class=\"collapse\" data-parent=\"#oneaccordion\">
                        <div class=\"card-body\">
                            <p>
                            DNB will deploy an end-to-end nationwide network in line with the following business principles:
                            </p>
                            <ul class=\"romanlower mt-3\">
                            <li>To adopt a multi-operator core network (MOCN) model, in addition to leveraging existing sites and fiber networks;</li>
                            <li>To implement a supply-led rollout strategy to accelerate nationwide coverage and adoption</li>
                            <li>To help reduce cost to serve for licensees, driven by spectral efficiency and by eliminating the need for the duplication of assets through the SWN model</li>
                            <li>To encourage MNOs and other licensees to shift away from infrastructure-based competition, towards a more service-oriented business model; and</li>
                            <li>To catalyse 5G enterprise-grade application adoption and innovation by orchestrating the necessary ecosystem and multi-model support systems.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"card content-tween-item\">
                    <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faqcont04\">
                        <div class=\"row\">
                            <div class=\"col my-auto\">
                            <h3>
                                What are the key service offerings that the public can expect from the 5G rollout?
                            </h3>
                            </div>
                            <div class=\"col-auto text-right mb-auto\">
                            <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id=\"faqcont04\" class=\"collapse\" data-parent=\"#oneaccordion\">
                        <div class=\"card-body\">
                            <p>
                            DNB will enable key 5G capabilities which are Enhanced Mobile Broadband (eMBB), Massive Machine Type Communication (mMTC), Ultra-Reliable Low-Latency Communication (uRLLC), and Network Slicing.​ 
                            </p>
                            <p>
                            This will include the underlying 5G capabilities such as artificial intelligence/machine learning (AI/ML), robotics and augmented reality and virtual reality (AR/VR) which will enable innovation that drives efficiency, service enablement and new experiences in various verticals.​ 
                            </p>
                            <p>
                            The key 5G capabilities are explained below:​ 
                            </p>
                            <ul class=\"romanlower\">
                            <li><strong>Enhanced Mobile Broadband (eMBB):</strong> Quite simply, the provision of mobile data, but at greater scale than before. 5G coverage will build on the speed and low-latency gains made by 4G to deliver even faster downlink and uplink speeds, and even lower latency. These gains can be experienced on 5G-enabled devices. eMBB makes any internet-based activity – whether accessing apps, email, websites, watching videos, and updating software – much faster and more seamless.​ </li>
                            <li><strong>Ultra-reliable, low latency communication (URLLC):</strong> This is defined by the 3GPP as a user plane latency of no more than 1 millisecond. URLLC makes it possible to support use cases that require very high reliability and extremely low latency such as industrial automation, intelligent transportation, and remote medical diagnosis and surgery.​ </li>
                            <li><strong>Massive Machine Type Communications (mMTC): </strong> mMTC is all about developing connectivity for large numbers of low-cost, low-energy devices or sensors in the context of the Internet of Things (IoT).​</li>
                            <li>Network Slicing allows 5G infrastructure to be shared by multiple logical networks with each one tailored to fit a defined business purpose, creating new revenue opportunities for communication service providers with better security, faster service delivery, and improved flexibility.​ </li>
                            </ul>
                            <p>DNB will also facilitate collaboration with industry stakeholders to identify key verticals as well as co-create unique, resilient, and proprietary applications for the consumer and enterprise segments.​ </p>
                            <p>Additionally, DNB will facilitate the deployment of fixed wireless access (FWA) to address last mile connectivity, particularly for rural and outlying areas of the country. With FWA technology, DNB will be able to extend 5G coverage to homes and businesses in areas where fibre deployment is not feasible.​ </p>
                            <p>This will promote greater digital inclusivity, allowing rural communities to participate in and benefit from Malaysia’s growing digital economy.​ </p>
                        </div>
                    </div>
                </div>
                <div class=\"card content-tween-item\">
                    <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faqcont05\">
                        <div class=\"row\">
                            <div class=\"col my-auto\">
                            <h3>How much is the 5G rollout expected to cost, and over how long a period of time? </h3>
                            </div>
                            <div class=\"col-auto text-right mb-auto\">
                            <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id=\"faqcont05\" class=\"collapse\" data-parent=\"#oneaccordion\">
                        <div class=\"card-body\">
                            <p>The entire 5G network rollout is expected to cost RM16.5 billion over the next 10 years. This is made up of RM12.5 billion for the 5G network equipment and infrastructure as well as RM4 billion in corporate costs.​ </p>
                            <p>The RM12.5 billion is broken down into a RM4 billion payment to Ericsson as the Network Equipment Provider (NEP), as well as RM8.5 billion for infrastructure development over the next 10 years. Of the RM4 billion payment to Ericsson, roughly RM2.3 billion will remain in the country. Meanwhile, of the RM8.5 billion, an estimated RM4 billion goes to site owners and tower infrastructure companies, roughly RM2.5 billion is meant for the laying of additional fibre, RM1 billion for power supply, and another estimated RM1 billion in apparatus assignment fees to the Malaysian Communications and Multimedia Commission (MCMC).​ </p>
                            <p>The vast majority of these funds will remain in-country and circulate throughout the local economy. In fact, most of these funds will flow to the domestic telecommunications ecosystem.​ </p>
                            <p>The RM 12.5 billion cost compares favorably against the cost estimates in the MyDIGITAL Blueprint and the National 5G Task Force Report of December 2019. The Task Force Report found that the incremental cost to upgrade just one 4G network in Malaysia to 5G would cost about RM7.5 billion. Based on the Task Force’s estimates, the deployment of the 5G Network collectively by the 4 major existing telcos would likely cost in excess of RM30 billion.​ </p>
                            <p>Besides capital expenditure (CAPEX) to build the 5G Coverage Network of RM12.5 billion, the corporate and operating expenditure (OPEX) to run the 5G Network over the 10 years is estimated at RM4 billion. This comprises, among others, staff costs, professional fees, data centre expenditure, insurance coverage, as well as marketing and promotional expenditure. This brings the cost of rollout of the 5G network and infrastructure over the next 10 years to RM16.5 billion.​ </p>
                        </div>
                    </div>
                </div>
                <div class=\"card content-tween-item\">
                    <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faqcont05a\">
                        <div class=\"row\">
                            <div class=\"col my-auto\">
                            <h3>How does DNB plan to finance the 5G network rollout?</h3>
                            </div>
                            <div class=\"col-auto text-right mb-auto\">
                            <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id=\"faqcont05a\" class=\"collapse\" data-parent=\"#oneaccordion\">
                        <div class=\"card-body\">
                            <p>The total cost for the 5G deployment will be financed exclusively by the private sector, with no Government funding or development expenditure involved.​ </p>
                            <p>On 12th November 2021 , DNB announced the securing of a working capital financing package of up to RM400 million from Deutsche Bank. It a RM150 million bank guarantee line, to be issued by Deutsche Bank AG, Labuan Branch, and a RM250 million revolving credit facility to be extended by Deutsche Bank (Malaysia) Berhad on an unsecured basis.​ </p>
                            <p>The facility will provide DNB with access to short-term financing for working capital requirements, mainly to support the company’s daily operations and capital expenditure.​ </p>
                            <p>The RM400 million financing package forms part of the estimated RM5 billion total working capital facilities that DNB will require between now and 2024 in order to roll out the planned 5G network.​ </p>
                            <p>In October 2021, United Overseas Bank (Malaysia) Bhd (UOB Malaysia) announced it had provided Ericsson (Malaysia) Sdn Bhd with a first tranche financing in the form of an RM800 million receivables purchase arrangement (RPA).​ </p>
                            <p>With the financing, Ericsson Malaysia will deliver the initial phases of Lorem Ipsum  Bhd's (DNB) nationwide 5G network rollout.​ </p>
                            <p>UOB Malaysia has also been mandated as the lead arranger for an additional RM2.3 billion syndicated RPA for potential financial institutions (FIs).​ </p>
                            <p>Upon acceptance of the syndicated RPA by the participating FIs, a total of RM3.1 billion will be raised in support of the supply, delivery, and management of DNB's entire 5G network.​ </p>
                            <p>DNB intends to establish an RM5 billion Sukuk programme in 2022, which is intended to replace the working capital facilities and to facilitate repayment of the RPA.​ </p>
                            <p>More announcements will be made as and when key financing milestones are achieved.​ </p>
                        </div>
                    </div>
                </div>
                <div class=\"card content-tween-item\">
                    <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faqcont06\">
                        <div class=\"row\">
                            <div class=\"col my-auto\">
                            <h3>How does the country stand to benefit from 5G coverage?</h3>
                            </div>
                            <div class=\"col-auto text-right mb-auto\">
                            <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id=\"faqcont06\" class=\"collapse\" data-parent=\"#oneaccordion\">
                        <div class=\"card-body\">
                            <p>The digital transformation catalysed by 5G coverage stands to create a potential GDP uplift of some RM150 billion and a further 750,000 new jobs by the year 2030.​ </p>
                            <p>In addition to the long-term GDP and job opportunities, other key socioeconomic benefits include:​ </p>
                            <ul class=\"romanlower\">
                            <li>Enabling the creation of more than 14,800 jobs across the economy in 2022 through DNB's investment and increased demand placed on the sector's supply chain​ </li>
                            <li>Facilitating domestic vendor participation by involving them in the supply of various NEP-related services </li>
                            <li>Seeding invaluable knowledge building programmes for industry, government, and academia </li>
                            <li>Developing a 5G Experiential Centre and Innovation Lab to showcase 5G use cases and fast track the development of tech start-ups​ </li>
                            </ul>
                            <p>
                            DNB has identified several major industries that could be early beneficiaries of the 5G deployment, including oil and gas, ports, tourism, education, healthcare, agriculture, manufacturing, retail, as well as power and utilities.​ 
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"card content-tween-item\">
                    <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faqcont07\">
                        <div class=\"row\">
                            <div class=\"col my-auto\">
                            <h3>What is the 5G rollout timeline for Malaysia?</h3>
                            </div>
                            <div class=\"col-auto text-right mb-auto\">
                            <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id=\"faqcont07\" class=\"collapse\" data-parent=\"#oneaccordion\">
                        <div class=\"card-body\">
                            <p>
                            5G services will be available in Putrajaya, Cyberjaya and parts of Kuala Lumpur in December 2021. Thereafter, it is planned to reach approximately 40% coverage in populated areas by the end of 2022 and subsequently will be extended nationwide to cover other urban and rural areas and industrial parks, with a target of approximately 80% coverage in populated areas by 2024. These plans are presently being finalised and more details will be shared upon approval of the plans by the MCMC.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"card content-tween-item\">
                    <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faqcont08\">
                        <div class=\"row\">
                            <div class=\"col my-auto\">
                            <h3>What is being done to ensure the 5G network meets industry standards for cybersecurity?</h3>
                            </div>
                            <div class=\"col-auto text-right mb-auto\">
                            <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id=\"faqcont08\" class=\"collapse\" data-parent=\"#oneaccordion\">
                        <div class=\"card-body\">
                            <p>Keeping 5G networks secure from cybersecurity threats is critical to realising its full-fledged benefits to consumers, organisations, and enterprises in the long run. 5G connectivity must therefore be consistent and reliable.</p>
                            <p>DNB understands the significant cybersecurity risk and adversarial interest from a range of threat actors towards DNB, critical national infrastructure (CNI) and 5G telecommunications organisations.</p>
                            <p>With this in mind, the Cybersecurity Office was created as part of DNB’s mandate to securely deploy the nation’s 5G telecommunications infrastructure. The Cybersecurity Office is critical to ensuring the safety, security, and digital resilience of the organisation, the services offered, and the data managed.</p>
                            <p>The Cybersecurity Office is empowered to ensure that DNB’s 5G network is resilient against cyberattacks. This includes not only the ability to detect threats, but to recover from them, and comply with both domestic and international laws, regulations, and standards.</p>
                            <p>DNB’s Cybersecurity Office covers the following four focus areas:</p>
                            <ul class=\"romanlower\">
                            <li>Protect, Shield, Defend, and Prevent cyberattacks in the organisation</li>
                            <li>Monitor, Detect, and Hunt malicious and potentially damaging activities</li>
                            <li>Respond, Recover, and Sustain operations in the event of a significant incident</li>
                            <li>Govern, Manage and Comply with regulatory and cybersecurity risk requirements</li>
                            </ul>
                            <p>
                            DNB is committed to the adoption of international standards (e.g. NIST, 3GPP, GSMA) and collaboration with not just regulators, but the broader ecosystem, robust internal education, as well as a 24/7 Security Operations Centre.
                            </p>
                        </div>
                    </div>
                </div>
                <br/>
                <button class=\"btn btn-primary\" type=\"button\">Load More</button>
                </div>
            </div>
            <div class=\"tab-pane fade\" id=\"contmenu1\">
                <div id=\"twoaccordion\" class=\"myaccordion\">
                <div class=\"card\">
                    <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faq2cont01\">
                        <div class=\"row\">
                            <div class=\"col my-auto\">
                            <h3>How will 5G be rolled out in Malaysia?</h3>
                            </div>
                            <div class=\"col-auto text-right mb-auto\">
                            <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id=\"faq2cont01\" class=\"collapse\" data-parent=\"#twoaccordion\">
                        <div class=\"card-body\">
                            <p>The 5G rollout will be implemented as a Single Wholesale Network (SWN).</p>
                            <p>Simply put, a 5G SWN refers to the provision of nationwide 5G coverage, delivered via one common network, to which all MCMC licensees in Malaysia can seek equal access on a wholesale basis. This common network will be built, owned, and operated by DNB. DNB will work closely with the appointed Network Equipment Provider (NEP) Ericsson, for the design, build, and maintenance of the 5G network.</p>
                            <p>Eligible licensees will be able to integrate their networks and infrastructure with the new single wholesale network established.</p>
                        </div>
                    </div>
                </div>
                <div class=\"card\">
                    <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faq2cont02\">
                        <div class=\"row\">
                            <div class=\"col my-auto\">
                            <h3>What makes the Single Wholesale Network (SWN) model suitable for Malaysia’s 5G rollout?</h3>
                            </div>
                            <div class=\"col-auto text-right mb-auto\">
                            <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id=\"faq2cont02\" class=\"collapse\" data-parent=\"#twoaccordion\">
                        <div class=\"card-body\">
                            <p>
                            The deployment of 5G network via a single entity was deliberated and considered earlier by the industry and MCMC as reflected in MCMC’s Public Inquiry report on “Allocation of spectrum bands for mobile broadband service in Malaysia”, published on 31st December 2019,   which was intended to lower the capital expenditure (“CAPEX’) by minimising costs and preventing the duplication of infrastructure, especially when improvements  and expansion of the 4G networks are still on-going under the Jalinan Digital Negara (JENDELA) initiative.
                            </p>
                            <p>
                            The establishment of Lorem Ipsum as a Single Wholesale Network is to assist in delivering the following key outcomes in line with the MyDigital aspirations, which are to:
                            </p>
                            <ul>
                            <li>Accelerate deployment of 5G infrastructure and network in Malaysia</li>
                            <li>Realise the potential of 5G in Malaysia to spur economic activity</li>
                            <li>Narrow the urban-rural digital divide and improve the current state of infrastructure</li>
                            <li>Avoid duplication of infrastructure and optimise the use of scarce resources</li>
                            <li>Promote service-based competition within the telecommunications industry</li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class=\"tab-pane fade\" id=\"contmenu2\">
                <div id=\"twoaccordion\" class=\"myaccordion\">
                <div class=\"card\">
                    <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faq3cont01\">
                        <div class=\"row\">
                            <div class=\"col my-auto\">
                            <h3>What technical architecture is DNB applying for the 5G rollout? </h3>
                            </div>
                            <div class=\"col-auto text-right mb-auto\">
                            <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id=\"faq3cont01\" class=\"collapse\" data-parent=\"#twoaccordion\">
                        <div class=\"card-body\">
                            <p>The 5G network will be rolled out with a 3GPP-approved Multi-Operator Core Network (MOCN) architecture.​ </p>
                            <p>MOCN emphasises the sharing of both network infrastructure and valuable spectrum resources.​ </p>
                            <p>It ensures that 5G services are delivered to telcos at a lower cost per GB than the present 4G standard. In turn, end users will have access to ultrafast, high quality, and affordable internet speeds.​ </p>
                            <p>This is in line with the government’s mandate to accelerate the deployment of 5G, making it available throughout Malaysia in order to bridge the urban-rural digital divide. </p>
                        </div>
                    </div>
                </div>
                <div class=\"card\">
                    <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faq3cont02\">
                        <div class=\"row\">
                            <div class=\"col my-auto\">
                            <h3>How does MOCN work?</h3>
                            </div>
                            <div class=\"col-auto text-right mb-auto\">
                            <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id=\"faq3cont02\" class=\"collapse\" data-parent=\"#twoaccordion\">
                        <div class=\"card-body\">
                            <p>An increasingly common rollout strategy, the MOCN model is a global telecommunications standard defined by the 3GPP , that allows a single network infrastructure or Radio Access Network (RAN) (which is the case with DNB) to be shared and connected to multiple telco core networks.​ </p>
                            <p>To use an analogy, the government in the past had allocated individual lanes (spectrum) to each telco. Based on the lanes provisioned by the government, the telcos would then build their own separate highways (network and infrastructure) for their users.​ </p>
                            <p>However, with vastly increased data demands within the country in recent years, these individual highways can be prone to congestion. Meanwhile, users on one highway are unable to get onto other less congested highways.​ </p>
                            <p>In the case of 5G, the MCMC has provided all the available lanes (5G spectrum) to DNB, allowing for the building of a single, seamless “superhighway” that is both secure and adaptable as the peak can be managed across all of DNB’s customers.​ </p>
                            <p>This 5G superhighway entails the rollout of a single seamless infrastructure comprising of the radio unit, power, and fibre connectivity which will serve all telcos equally on a wholesale basis. </p>
                        </div>
                    </div>
                </div>
                <div class=\"card\">
                    <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faq3cont03\">
                        <div class=\"row\">
                            <div class=\"col my-auto\">
                            <h3>What technical architecture is DNB applying for the 5G rollout? </h3>
                            </div>
                            <div class=\"col-auto text-right mb-auto\">
                            <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id=\"faq3cont03\" class=\"collapse\" data-parent=\"#twoaccordion\">
                        <div class=\"card-body\">
                            <p>Malaysia's 5G MOCN model is a global technical milestone because it successfully integrated DNB's RAN Core to five telcos' core networks, with a sixth to follow soon.​ </p>
                            <p>Prior to the Malaysian 5G MOCN experience, integrations in other countries had only ever been done with two telcos. </p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>", "modules/custom/accenture_common/templates/faq-block.html.twig", "C:\\xampp\\htdocs\\drupal\\modules\\custom\\accenture_common\\templates\\faq-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
