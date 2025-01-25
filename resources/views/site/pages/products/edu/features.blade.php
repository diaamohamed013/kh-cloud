@extends('site.pages.products.master')

@push('feature-css')
    <link rel="stylesheet" href="https://edustepup.com/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://edustepup.com/assets/css/style.min.css">
    <link rel="stylesheet" href="https://edustepup.com/assets/css/style-en.min.css">
    <style>
        .header-feature {
            background-color: #fff !important;
            height: 80px !important;
            position: sticky !important;
            top: 40;
            left: 0;
            right: 0;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.15) !important;
        }

        .header-feature .main-nav .nav li a,
        .header-feature .main-nav .logo {
            color: #333 !important;
        }

        img {
            width: auto;
        }

        .slick-initialized .slick-slide {
            height: auto;
        }

        ul.featuresEdu li {
            list-style: disc;
        }
    </style>
@endpush

@section('content')
    <!-- Start Main Content -->
    <main class="fetaure-page-main">

        <div class="features-page">
            <div class="features-header">
                <h1 class="green-color text-center wow fadeInUp">Features of EDU Cloud System</h1>
                <p class="gray-color text-center main-font-size wow fadeInUp" data-wow-delay="0.2s">
                    The system contains all the basic tools and sections that are based on managing the entire school.
                </p>
            </div>

            <div class="features-intro bg-light-gray-color">
                <div class="row">

                    <div class="col-md-5 text-center mob-features">
                        <img src="https://edustepup.com/assets/images/features-intro-banner.png" class="wow bounceIn"
                            data-wow-delay="0.2s" alt="Advantages of the school management system"
                            title="Advantages of the school management system">
                    </div>

                    <div class="col-md-7">
                        <h2 class="green-color wow fadeInUp" data-wow-delay="0.2s">
                            EDU Cloud System
                        </h2>
                        <p class="gray-color main-font-size wow fadeInUp" data-wow-delay="0.2s">
                            EDU Cloud System is a comprehensive and flexible solution for managing nurseries, educational
                            institutes, academies, and learning centers. It enables you to organize and manage all aspects
                            of the educational institution with high efficiency. The system provides a flexible and
                            easy-to-use environment for communication between teachers, students, parents, and the
                            institution's management, enhancing work efficiency and ensuring smooth interaction between all
                            parties. The program is user-friendly and can be customized to meet the needs of all types of
                            educational institutions, whether they are nurseries, institutes, academies, or learning
                            centers.
                        </p>
                        <p class="gray-color main-font-size wow fadeInUp" data-wow-delay="0.2s">
                            <strong style="color: #f5a425; font-size: 16px;">
                                Program Features:
                            </strong>
                            <br>
                            - An integrated system for managing the educational institution, covering all aspects such as
                            registration, admissions, attendance, and evaluations.<br>
                            - A dedicated integrated website for the educational institution that allows direct
                            communication between teachers, students, and parents.<br>
                            - An interactive app for parents and students, enabling them to track updates related to
                            attendance, assignments, results, and other educational matters.<br>
                            - The system can be customized to suit the specific needs of each institution, whether it's a
                            nursery, institute, academy, or learning center.
                        </p>
                        <br>
                        <p class="gray-color main-font-size wow fadeInUp" data-wow-delay="0.2s">
                            <strong style="color: #f5a425; font-size: 16px;">
                                Program Characteristics:
                            </strong>
                            <br>
                            - Student Management: From registration, attendance tracking, organizing exams, issuing
                            certificates, to providing detailed and comprehensive reports.<br>
                            - Staff Management: Tracking performance, managing schedules, and calculating salaries
                            accurately and efficiently.<br>
                            - Account Management: A comprehensive accounting system for managing payments and expenses, with
                            the ability to issue invoices and organize tuition fees.<br>
                            - E-learning: Provides a digital learning environment that allows students and parents to easily
                            access educational materials, simplifying the remote learning experience.<br>
                            - Daily Task Management: The system helps streamline daily tasks using intelligent systems that
                            enhance efficiency and save time.
                        </p>
                        <br>
                        <p class="gray-color main-font-size wow fadeInUp" data-wow-delay="0.2s">
                            EDU Cloud System is the ideal choice for managing your educational institutions with flexibility
                            and professionalism, enhancing the institution's image and providing a progressive educational
                            environment that meets the needs of both students and parents.
                        </p>
                    </div>

                    <div class="col-md-5 text-center web-features">
                        <img src="https://edustepup.com/assets/images/features-intro-banner.png" class="wow bounceIn"
                            data-wow-delay="0.2s" alt="Advantages of the school management system"
                            title="Advantages of the school management system">
                    </div>
                </div>
            </div>

            <div class="divider"></div>

            <div class="features-list">
                <div class="row">

                    <div class="col-md-5 text-center">
                        <img src="https://edustepup.com/assets/images/en/features-edu-step-up-en.jpg" class="wow bounceIn"
                            data-wow-delay="0.2s" alt="General Features of EDU Step-up"
                            title="General Features of EDU Step-up">
                    </div>

                    <div class="col-md-7">
                        <h2 class="green-color wow fadeInUp" data-wow-delay="0.2s">
                            Edu Cloud System General feature:
                        </h2>
                        <ul class="gray-color wow fadeInUp featuresEdu" data-wow-delay="0.2s">
                            <li>Comprehensive Web-Based System for Educational Institutions
                                Edu Cloud System is a complete cloud-based system that organizes and manages all aspects of
                                your educational institution online, ensuring smooth and efficient management.</li>
                            <li>User-Friendly and Convenient Interface
                                Edu Cloud System features an easy-to-use and intuitive interface, making it simple for you
                                to carry out daily tasks with minimal effort.</li>
                            <li>Complete Data and Information Protection
                                Edu Cloud System provides full protection for the files and data of your institution,
                                ensuring that all information is secure and safe.</li>
                            <li>Secure Cloud Storage System
                                Edu Cloud System utilizes cloud storage to securely save your data, providing protection and
                                security for your institution’s information at all times.</li>
                            <li>Automatic Backups and Easy Data Recovery
                                Edu Cloud System automatically backs up all data regularly, with the ability to restore it
                                immediately in case of any errors.</li>
                            <li>Multi-Language Support
                                Edu Cloud System supports multiple languages, including Arabic and English, to accommodate
                                the needs of users from different regions.</li>
                            <li>Compatibility with All Devices and Browsers
                                You can use Edu Cloud System on all desktop and mobile devices, as well as on all different
                                browsers, offering you great flexibility in access.</li>
                            <li>Full Support for Your Website and Mobile Apps
                                Edu Cloud System provides full support for your institution’s website and mobile
                                application, enhancing communication with all parties.</li>
                            <li>Developed with Modern Technologies
                                Edu Cloud System is developed using the latest programming technologies such as PHP and
                                SQL Server, ensuring excellent performance and stability.</li>
                            <li>Advanced Permission Distribution System
                                Edu Cloud System features a professional permission distribution system for all users,
                                giving you full control over access to information and functions.</li>
                            <li>Dynamic Account Tree
                                Edu Cloud System has a dynamic account tree with up to 6 levels, allowing you to easily add
                                all budget items.</li>
                            <li>Complete VAT Support
                                Edu Cloud System fully supports VAT, making the process of calculating and issuing invoices
                                seamless.</li>
                            <li>Easy Import and Export of Files and Reports
                                Edu Cloud System allows easy import and export of files and reports in Excel and PDF
                                formats, streamlining daily operations.</li>
                            <li>Easy System Setup and Customization
                                You can easily customize Edu Cloud System to fit the needs of your institution, whether it's
                                a nursery, institute, academy, or tutoring center.</li>
                            <li>Fast and Efficient Performance under Pressure
                                Edu Cloud System offers high speed and efficiency in managing operations and data, even
                                under heavy workload.</li>
                            <li>Encrypted and Secure Data Storage
                                Edu Cloud System processes and stores large volumes of data in an encrypted manner, ensuring
                                complete data protection.</li>
                            <li>Support for Multiple Currencies
                                Edu Cloud System supports various currencies, allowing you to adjust the system settings
                                according to your local currency.</li>
                            <li>Trusted by Over 350 Educational Institutions
                                Edu Cloud System is the trusted choice for over 350 educational institutions both within
                                Egypt and internationally.</li>
                            <li>24/7 Professional Technical Support
                                Edu Cloud System provides professional technical support at all times, ensuring any issue
                                you encounter is resolved promptly and effectively.</li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="divider"></div>

            <div class="features-items">
                <h2 class="green-color wow fadeInUp" data-wow-delay="0.2s">
                    Special features in the Edu Step Up school management system:
                </h2>

                <p class="box-title rounded-pill bg-green-color white-color main-font-size wow fadeInUp"
                    data-wow-delay="0.2s">
                    The section on administrative affairs
                </p>

                <div class="row">

                    <div id="divsmodile" class="col-12 col-md-6 col-lg-4 divsmodile">
                        <div id="div1" class="boxItem bg-light-gray-color wow fadeInUp" data-wow-delay="0.2s">
                            <h3 class="green-color"><span class="white-color bg-green-color">1</span>
                                <a class="green-color feature-link"
                                    href="https://edustepup.com/en/department-student-affairs">Department of Student
                                    Affairs</a>
                            </h3>
                            <ul class="gray-color main-font-size">
                                <li>It allows you to divide the school by type of study) national - international -
                                    Languages American - British – Montessori .(
                                    Dividing the school into classes.</li>
                                <li>Add stages and classes or delete them at any time depending on the school needs.
                                </li>
                                <li>Add all student and parent data and save all student attachments from official
                                    papers such as birth certificate and health certificates.</li>
                                <li>Follow-up of students' records and extracts, record the absence of students, extract
                                    a certificate of registration, extract a certificate of good conduct, and extract
                                    permission to leave.</li>
                                <li>It also features the possibility of extracting a certificate of empty places,
                                    extracting a clearance of expenses, requesting the withdrawal of a file, and
                                    requesting a transfer from one school to another.</li>
                                <li>The possibility of displaying the grade of a class or student, displaying the
                                    student recipient, and adding student delivery officials.</li>
                                <li>Distributing students to classes in an orderly manner, as well as monitoring the
                                    cases of vacations and absences of students.</li>
                                <li>One of the most important advantages of this section is that it includes all
                                    government and non-governmental reports required from the school needed to manage
                                    student affairs, In addition to working the customized student affairs reports
                                    dynamically according to the required name as well as the data presented.</li>
                            </ul>
                        </div>

                        <div id="div4" class="boxItem bg-light-gray-color wow fadeInUp" data-wow-delay="0.2s">
                            <h3 class="green-color"><span class="white-color bg-green-color">4</span>
                                <a class="green-color feature-link"
                                    href="https://edustepup.com/en/school-general-financial-acounts-management-program">General
                                    financial account management</a>
                            </h3>
                            <ul class="gray-color main-font-size">
                                <li> A dynamic accounting series that enables you to add all the items in the budget.
                                </li>
                                <li>Adding assets and depreciating fixed assets.</li>
                                <li>Add more than one safe if there is, add Permission to receive the salary, and the
                                    possibility of adding all the banks that the school deals with and registering the
                                    account numbers of each bank.</li>
                                <li>Add cash Permission, the possibility of making operating cost centers and follow-up
                                    reports, calculating trade and operation, and calculating profits and losses.</li>
                                <li>The possibility of daily entries in a manual manner, as well as follow up on all the
                                    daily entries that occurred during the day or during a certain period, as well as
                                    the work of the balance of review report.</li>
                                <li>Edu Step Up provides the general budget, Auxiliary Records, and supports the
                                    possibility of adding a new financial year.</li>

                            </ul>
                        </div>

                        <div id="div7" class="boxItem bg-light-gray-color wow fadeInUp" data-wow-delay="0.2s">
                            <h3 class="green-color"><span class="white-color bg-green-color">7</span>
                                <a class="green-color feature-link"
                                    href="https://edustepup.com/en/school-warehouses-management">School stores
                                    management</a>
                            </h3>
                            <ul class="gray-color main-font-size">
                                <li> Helps organize and manage school stores such as school uniforms, books and school
                                    supplies.</li>
                                <li> Register all stores in the school, register items and types in each store, and the
                                    possibility of making an inventory of stores.</li>
                                <li> Recording of companies and suppliers, making purchase invoices for items and
                                    recording them at the supplier's expense, with permission to deliver tools, books,
                                    or school uniforms to each student and employee.</li>
                                <li> The ability to track the movement of each item, the possibility of making
                                    conversions from store to store, and support recording depreciation</li>

                            </ul>
                        </div>

                        <div id="div11" class="boxItem bg-light-gray-color wow fadeInUp" data-wow-delay="0.2s">
                            <h3 class="green-color">There are other features of the management system that you can
                                discover yourself when trying the program, such as:</h3>
                            <ul class="gray-color main-font-size inlineList">
                                <li>Electronic recording system</li>
                                <li>Premium sessions schedule</li>
                                <li>Student Guide</li>
                                <li>SMS messages</li>
                            </ul>
                        </div>

                    </div>


                    <div class="col-12 col-md-6 col-lg-4 divsmodile">

                        <div id="div2" class="boxItem bg-light-gray-color wow fadeInUp" data-wow-delay="0.2s">
                            <h3 class="green-color"><span class="white-color bg-green-color">2</span>
                                <a class="green-color feature-link"
                                    href="https://edustepup.com/en/personnel-management">Department of Personnel
                                    Affairs</a>
                            </h3>
                            <ul class="gray-color main-font-size">
                                <li>Organizing the administrative structure of the school and organizing departments and
                                    departments of personnel affairs.</li>
                                <li>The ability to link Edu Step Up to the fingerprint device.</li>
                                <li>Add segments and determine salaries and allowances as well as insurance and taxes.
                                </li>
                                <li>Set attendance and departure dates for each segment and determine the annual and
                                    occasional holidays for each segment.</li>
                                <li>Custom settings for monthly allowed permissions, and add staff with all the required
                                    data.</li>
                                <li>Register the required documents from all employees as well as register all documents
                                    that were brought from each employee, with settings dedicated to the regulations of
                                    violations.</li>
                                <li>Monthly salary approval and the program calculates all discounts and additions
                                    automatically based on monthly inputs, and transactions made on each employee.</li>
                                <li>The possibility of adding an immediate bonus or discount to an employee, and
                                    automatically calculating employee delays through the fingerprint machine.</li>
                                <li>The program has a system of covenant and advances.</li>
                                <li>Extract all reports related to the affairs of workers for export or printing.</li>
                            </ul>
                        </div>

                        <div id="div5" class="boxItem bg-light-gray-color wow fadeInUp" data-wow-delay="0.2s">
                            <h3 class="green-color"><span class="white-color bg-green-color">5</span>
                                <a class="green-color feature-link"
                                    href="https://edustepup.com/en/school-bus-management">School bus management</a>
                            </h3>
                            <ul class="gray-color main-font-size">
                                <li>Follow all school buses starting with adding lines and bus stops and adding school
                                    bus subscriptions.</li>
                                <li>Full reports on bus subscriptions.</li>
                                <li>Daily bus menu and support for the addition of school bus staff.</li>
                                <li>Register attendance, leave a bus, and follow daily reports.</li>

                            </ul>
                        </div>

                        <div id="div8" class="boxItem bg-light-gray-color wow fadeInUp" data-wow-delay="0.2s">
                            <h3 class="green-color"><span class="white-color bg-green-color">8</span>
                                <a class="green-color feature-link"
                                    href="https://edustepup.com/en/school-library-management-system">School library
                                    management</a>
                            </h3>
                            <ul class="gray-color main-font-size">
                                <li>Add sections and branches of books.</li>
                                <li>Add books with all their data.</li>
                                <li>Borrow it and return a book.</li>
                                <li>Book depreciation system.</li>
                                <li>Library search system.</li>
                                <li>Library reports.</li>
                                <li>Print cards.</li>
                                <li>Barcode library inventory system.</li>
                            </ul>
                        </div>
                        <div id="div9" class="boxItem bg-light-gray-color wow fadeInUp" data-wow-delay="0.2s">
                            <h3 class="green-color"><span class="white-color bg-green-color">9</span>
                                <a class="green-color feature-link"
                                    href="https://edustepup.com/en/school-clinic-management-system">School clinic
                                    management</a>
                            </h3>
                            <ul class="gray-color main-font-size">
                                <li>Healthy student file.</li>
                                <li>Add a doctor- clinic - specialty - medical examination.</li>
                                <li>Organize students' visits to the clinic.</li>
                                <li>Organize the follow-up process for students' health.</li>
                                <li>Report statements for a certain period.</li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-4 divsmodile">

                        <div id="div3" class="boxItem bg-light-gray-color wow fadeInUp" data-wow-delay="0.2s">
                            <h3 class="green-color"><span class="white-color bg-green-color">3</span>
                                <a class="green-color feature-link"
                                    href="https://edustepup.com/en/accounting-program-private-schools-management-student-accounts">Student
                                    financial accounts management</a>
                            </h3>
                            <ul class="gray-color main-font-size">
                                <li> Registration of all tuition items such as (tuition fees - book fees - school
                                    uniforms fees) </li>
                                <li>Registration of compulsory and optional items for these fees as the mandatory items
                                    are those that are registered as automatic debt to students.</li>
                                <li>Record class fees based on the number of fees for each class.</li>
                                <li>Make customized settings for fraternity discounts and discounts for the children of
                                    employees and partners.</li>
                                <li>Custom settings for the school's system to collect tuition fees whether (single
                                    installments - multiple installments - statement of account) for easy management of
                                    students' accounts.</li>
                                <li>More than one optional fee can be added such as (school uniforms, activity fees,
                                    trip fees, subscription fees).</li>
                                <li>The possibility of adding a dedicated debt or making a discount for each individual
                                    student.</li>
                                <li>The possibility of adding debt or making a comprehensive discount for each stage,
                                    class, or group of students.</li>
                                <li>Provide more than one method of payment which is the public payment means payment of
                                    the total amount - payment is a custom payment which is paid from each term
                                    individually (education - books - buses).</li>
                            </ul>
                        </div>

                        <div id="div6" class="boxItem bg-light-gray-color wow fadeInUp" data-wow-delay="0.2s">
                            <h3 class="green-color"><span class="white-color bg-green-color">6</span>
                                <a class="green-color feature-link"
                                    href="https://edustepup.com/en/school-control-management">School control
                                    management</a>
                            </h3>
                            <ul class="gray-color main-font-size">
                                <li>Helps save the lost time and effort during the school control work where the edu
                                    Step Up school management program shortens the processes that take place within the
                                    school control and take a lot of time.</li>
                                <li>Recording all materials for each class and dividing each item into elements
                                    according to the system followed by the school, with the score counted by Excel
                                    Sheet.</li>
                                <li>The ability to control the work of the control and streamlining the grades according
                                    to the type of study followed in the school and according to the rules of control
                                    and the equations followed.</li>
                                <li>The ability to balance grades by manual balance through the program, and extract all
                                    reports with seating numbers and secret numbers.</li>
                                <li>The possibility of extracting seating numbers and secret numbers and distributing
                                    them automatically to students, with the addition of control members.</li>
                                <li>Printing report to each committee of the number of students in the committee and its
                                    seat and the seating numbers of all the students present there.</li>
                                <li>Distributing students to different committees, determining the number of students in
                                    each committee, and recording the absence of students in the examinations of each
                                    subject.</li>
                                <li>Extract all reports related to the work of the school control.</li>
                            </ul>
                        </div>

                        <div id="div10" class="boxItem bg-light-gray-color wow fadeInUp" data-wow-delay="0.2s">
                            <h3 class="green-color"><span class="white-color bg-green-color">10</span>
                                <a class="green-color feature-link"
                                    href="https://edustepup.com/en/portal-reception-management-school-program">Reception
                                    and gate</a>
                            </h3>
                            <ul class="gray-color main-font-size">
                                <li>Follow-up on all matters related to the reception department and the security
                                    department of the school.</li>
                                <li>Record all visits during the day and end these visits on a specific schedule.</li>
                                <li>Recording all gate inputs from devices, goods or any tools entering the school
                                    through the gates.</li>
                                <li>A special section for complaints and suggestions submitted by parents with follow-up
                                    cases of complaints, or suggestions until they are resolved by the school
                                    administration.</li>
                                <li>A special section for applications to join and follow up on the student dating
                                    program.</li>
                                <li>Part of the job submissions.</li>
                            </ul>
                        </div>

                    </div>

                </div>

                <br><br>

                <p class="box-title rounded-pill bg-green-color white-color main-font-size wow fadeInUp"
                    data-wow-delay="0.2s">
                    The section of the school's portal
                </p>

                <div class="row">

                    <div class="col-md-6">
                        <div class="boxItem bg-light-gray-color wow fadeInUp" data-wow-delay="0.2s">
                            <h3 class="green-color"><span class="white-color bg-green-color">1</span>The section of
                                the school's portal</h3>
                            <ul class="gray-color main-font-size">
                                <li>View the school's data in addition to its objectives, vision, and mission as well as
                                    ways of communicating, display the school's website on the map, and the conditions
                                    of application for students and a job offer. </li>
                                <li>There is a part to add an album of school photos and videos.</li>
                                <li>The possibility to make advertisements for activities offered by the school to
                                    students.</li>
                                <li>There is a special section for the latest news and important events scheduled
                                    according to the time schedule.</li>
                                <li>The possibility of making an electronic library with books of interest to students
                                    for viewing.</li>
                                <li>The possibility of sending visitors complaints or suggestions through the school's
                                    website.</li>

                            </ul>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="boxItem bg-light-gray-color wow fadeInUp" data-wow-delay="0.2s">
                            <h3 class="green-color"><span class="white-color bg-green-color">2</span>
                                Interface it to follow up on the process of education
                            </h3>
                            <ul class="gray-color main-font-size">
                                <li>
                                    <span class="green-color">Parent account: </span>
                                    reports on both (leaving the student with permission - absence - monthly results and
                                    end-of-year results - behavior - class schedule and test schedule).
                                    Parents can also see an account statement with the financial dues paid or what has
                                    come to be due, as well as notices that will inform him of the above.
                                    Parents can also communicate easily with the administration without having to call
                                    or attend the school.


                                </li>

                                <li>
                                    <span class="green-color">Student account: </span>
                                    It is characterized by continued student communication with his teacher and
                                    colleagues, through which he receives his homework and do it and send it to his
                                    teacher and receive evaluation through it and also send his inquiries to his teacher
                                    in his private class or to discuss matters with the teacher and colleagues in the
                                    classroom.
                                    He can also receive a schedule of classes and exams and browse the electronic
                                    library.

                                </li>

                                <li>
                                    <span class="green-color">Teacher: </span>
                                    The role of the teacher is to help the students and send a response to their
                                    inquiries and add and evaluate homework and send files that interest them.
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>


                <br><br>

                <p class="box-title rounded-pill bg-green-color white-color main-font-size wow fadeInUp"
                    data-wow-delay="0.2s">
                    Mobile school application
                </p>

                <div class="boxItem bg-light-gray-color wow fadeInUp" data-wow-delay="0.2s">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="gray-color main-font-size">
                                <li>The account for the parent and the student with all the features available in the
                                    portal but on the mobile phone to make it more flexible to use.</li>
                                <li>It is easy and fast even with the work pressure on it.</li>


                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="gray-color main-font-size">
                                <li>Supports all smartphone systems (android-IOS).</li>
                                <li>Easy to navigate between different parts and sections of the application.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="boxItem bg-light-gray-color wow fadeInUp" data-wow-delay="0.2s">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="gray-color main-font-size">
                                In addition to all of the above, you can request custom modifications to the system to
                                suit the needs of your school.
                                <br>
                                Develop your school with an integrated web-based system that will help you manage all
                                school departments with complete ease, order to try the Edu Step Up system experimental
                                copy now.
                            </p>
                        </div>

                    </div>
                </div>

            </div>

            <div class="text-center socialIcons wow fadeInUp" data-wow-delay="0.2s">
                <img src="https://edustepup.com/assets/images/shareIcon.png" class="" alt="share"
                    title="share">
                <span class="gray-color">share:</span>
                <a rel="noopener" target="_BLANK"
                    href="https://www.facebook.com/sharer/sharer.php?u=https://edustepup.com/en/features">
                    <img src="https://edustepup.com/assets/images/facebook.png" class="" alt="facebook"
                        title="facebook">
                </a>

                <a rel="noopener" target="_BLANK"
                    href="https://twitter.com/intent/tweet?text=https://edustepup.com/en/features">
                    <img src="https://edustepup.com/assets/images/twitter.png" class="" alt="twitter"
                        title="twitter">
                </a>

                <a rel="noopener" target="_blank"
                    href="https://www.linkedin.com/shareArticle?mini=true&url=https://edustepup.com/en/features&title=LinkedIn%20Developer%20Network&summary=My%20favorite%20developer%20program&source=LinkedIn">
                    <img src="https://edustepup.com/assets/images/linkedin.png" class="" alt="linkedin"
                        title="linkedin">
                </a>



                <a rel="noopener" target="_BLANK"
                    href="https://api.whatsapp.com://send?text=https://edustepup.com/en/features">
                    <img src="https://edustepup.com/assets/images/whatsapp.png" class="" alt="whatsapp"
                        title="whatsapp">
                </a>

                <a rel="noopener" target="_BLANK"
                    href="http://pinterest.com/pin/create/button/?url=https://edustepup.com/en/features&media=https://edustepup.com/uploads/en/&description="
                    class="pin-it-button" count-layout="horizontal">
                    <img src="https://edustepup.com/assets/images/pintrest.png" class="" alt="pintrest"
                        title="pintrest">
                </a>
            </div>

            <div class="divider"></div>

        </div>
        <br>
        <!-- Start clients logos slider-->
        <div class="clients-logos bg-light-gray-color text-center">
            <h3 class="green-color wow fadeInUp" data-wow-delay="0.2s">Our Clients</h3>
            <div class="clients-logos-slider slider wow fadeInUp" data-wow-delay="0.2s">

                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/yemen-international-school.webp"
                        class="clientImg" alt="Yemen international School" title="Yemen international School">
                    <p class="gray-color">Yemen international School</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/al-resala-language-school.webp"
                        class="clientImg" alt="Al-resala language School" title="Al-resala language School">
                    <p class="gray-color">Al-resala language School</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/asbats-private-school.png" class="clientImg"
                        alt="Asbats private School" title="Asbats private School">
                    <p class="gray-color">Asbats private School</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/almanaber-school.webp" class="clientImg"
                        alt="Almanaber School" title="Almanaber School">
                    <p class="gray-color">Almanaber School</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/almshrq-private-schools.webp" class="clientImg"
                        alt="Almshrq private Schools" title="Almshrq private Schools">
                    <p class="gray-color">Almshrq private Schools</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/golf-language-schools.png" class="clientImg"
                        alt="Golf Language Schools" title="Golf Language Schools">
                    <p class="gray-color">Golf Language Schools</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/rashed-private-school.png" class="clientImg"
                        alt="Rashed Private-School" title="Rashed Private-School">
                    <p class="gray-color">Rashed Private-School</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/abdelhamid-language-schools.png"
                        class="clientImg" alt="Abdel Hamid Language Schools" title="Abdel Hamid Language Schools">
                    <p class="gray-color">Abdel Hamid Language Schools</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/epschool.webp" class="clientImg"
                        alt="EP Schools" title="EP Schools">
                    <p class="gray-color">EP Schools</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/ndazagazig-school.webp" class="clientImg"
                        alt="Ndazagazig School" title="Ndazagazig School">
                    <p class="gray-color">Ndazagazig School</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/al-zahraa-private-school.webp" class="clientImg"
                        alt="Al-zahraa Private School" title="Al-zahraa Private School">
                    <p class="gray-color">Al-zahraa Private School</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/horizon-language-schools.webp" class="clientImg"
                        alt="Horizon Language Schools" title="Horizon Language Schools">
                    <p class="gray-color">Horizon Language Schools</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/alnajah-private-schools.webp" class="clientImg"
                        alt="Alnajah Private-Schools" title="Alnajah Private-Schools">
                    <p class="gray-color">Alnajah Private-Schools</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/bilasan.webp" class="clientImg"
                        alt="Bilasan Schools" title="Bilasan Schools">
                    <p class="gray-color">Bilasan Schools</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/safwa-private-schools.webp" class="clientImg"
                        alt="Safwa Private Schools" title="Safwa Private Schools">
                    <p class="gray-color">Safwa Private Schools</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/helmia-private-school.png" class="clientImg"
                        alt="Helmia Private School" title="Helmia Private School">
                    <p class="gray-color">Helmia Private School</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/adiips-school.webp" class="clientImg"
                        alt="Adiips School" title="Adiips School">
                    <p class="gray-color">Adiips School</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/elnoorelnoor-private-school.webp"
                        class="clientImg" alt="Elnoor Private School" title="Elnoor Private School">
                    <p class="gray-color">Elnoor Private School</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/alynabee-schools.png" class="clientImg"
                        alt="Alynabee Schools" title="Alynabee Schools">
                    <p class="gray-color">Alynabee Schools</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/alkhut-primary.webp" class="clientImg"
                        alt="Alkhut Primary" title="Alkhut Primary">
                    <p class="gray-color">Alkhut Primary</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/ajial-aseer-international-school.png"
                        class="clientImg" alt="Ajial Aseer international School"
                        title="Ajial Aseer international School">
                    <p class="gray-color">Ajial Aseer international School</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/delta-modern-language-schools.webp"
                        class="clientImg" alt="Delta Modern language Schools" title="Delta Modern language Schools">
                    <p class="gray-color">Delta Modern language Schools</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/el-shams-private-school.webp" class="clientImg"
                        alt="El-shams Private School" title="El-shams Private School">
                    <p class="gray-color">El-shams Private School</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/misr-mostakbal.png" class="clientImg"
                        alt="Misr Mostakbal" title="Misr Mostakbal">
                    <p class="gray-color">Misr Mostakbal</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/tamayoz-language-school.webp" class="clientImg"
                        alt="Tamayoz Language School" title="Tamayoz Language School">
                    <p class="gray-color">Tamayoz Language School</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/alnasr-schools.png" class="clientImg"
                        alt="Alnasr Schools" title="Alnasr Schools">
                    <p class="gray-color">Alnasr Schools</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/rwad-altalom.webp" class="clientImg"
                        alt="Rwad Altalom" title="Rwad Altalom">
                    <p class="gray-color">Rwad Altalom</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/frsani-school.webp" class="clientImg"
                        alt="Frsani School" title="Frsani School">
                    <p class="gray-color">Frsani School</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/canal-anguage-schools.png" class="clientImg"
                        alt="Canal Anguage Schools" title="Canal Anguage Schools">
                    <p class="gray-color">Canal Anguage Schools</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/academy-of-knowledge-school.webp"
                        class="clientImg" alt="Academy of knowledge School" title="Academy of knowledge School">
                    <p class="gray-color">Academy of knowledge School</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/sanabel-roshdy-international-school.webp"
                        class="clientImg" alt="Sanabel Roshdy international School"
                        title="Sanabel Roshdy international School">
                    <p class="gray-color">Sanabel Roshdy international School</p>
                </div>
                <div class="slide">
                    <img src="https://edustepup.com/assets/images/clients/al-eman-private-schoolsd.webp" class="clientImg"
                        alt="Al-eman Private Schools" title="Al-eman Private Schools">
                    <p class="gray-color">Al-eman Private Schools</p>
                </div>
            </div>

            <button class="btn more rounded-pill bg-green-color white-color main-font-size wow fadeInUp"
                data-wow-delay="0.2s" onclick="location.href='https://edustepup.com/en/clients'">more clients</button>
        </div>
        <!-- End clients reviews slider-->

        <br>
        <div class="features-page">
            <div class="divider"></div>
        </div>

        <div class="trial-version">
            <div class="form-content text-center bg-light-gray-color no-border">
                <h3 class="green-color wow fadeInUp" data-wow-delay="0.2s">
                    Request trial version </h3>
                <p class="gray-color main-font-size wow fadeInUp" data-wow-delay="0.2s">
                    Please fill in your details to get a free online demo </p>
                <form id="contactform" method="POST" action="https://edustepup.com/controller/contact.php" novalidate>
                    <input type="hidden" name="page" value="المميزات">
                    <input type="hidden" name="link" value="https://edustepup.com/en/features">
                    <div class="form-group wow fadeInUp" data-wow-delay="0.2s">
                        <input type="text" name="name" id="name" type="text" class="form-control"
                            required="" placeholder="Full Name">
                    </div>

                    <div class="form-group wow fadeInUp" data-wow-delay="0.2s">
                        <input id="phone" name="phone" type="text" required="" class="form-control"
                            placeholder="Phone">
                    </div>
                    <div class="form-group wow fadeInUp" data-wow-delay="0.2s">
                        <input type="email" name="email" id="email" class="form-control" required=""
                            placeholder="E-mail">
                    </div>
                    <div class="form-group wow fadeInUp" data-wow-delay="0.2s">
                        <input type="text" name="country" id="country" type="text" class="form-control"
                            required="" placeholder="country">

                    </div>
                    <div class="form-group wow fadeInUp" data-wow-delay="0.2s">
                        <input type="text" name="school" id="school" type="text" class="form-control"
                            required="" placeholder="School Name">
                    </div>
                    <div class="form-group wow fadeInUp" data-wow-delay="0.2s">
                        <input type="text" name="job" id="job" type="text" class="form-control"
                            required="" placeholder="Job Title">
                    </div>
                    <div class="form-group wow fadeInUp" data-wow-delay="0.2s">
                        <textarea name="message" id="message" rows="4" class="form-control" required="" placeholder="Message"></textarea>
                    </div>

                    <button type="submit" id="contact-button" onclick="onClick(event)"
                        class="btn rounded-pill bg-green-color white-color main-font-size registerBtn wow fadeInUp"
                        data-wow-delay="1.2s">Send</button>
                    <p class="form-messege"></p>
                    <div class="col-12 text-center message-responce">
                        <div style="color:red;font-weight:bold; background-color: transparent;" id="form-messages">
                        </div>
                    </div>
                </form>

            </div>

        </div>

    </main>
@endsection

@push('feature-js')
    <link rel="stylesheet" href="https://edustepup.com/assets/css/normalize.min.css">
    <link rel="stylesheet" href="https://edustepup.com/assets/css/animate.min.css">
    <link rel="stylesheet" href="https://edustepup.com/assets/css/responsive.min.css">

    <script type="text/javascript" src="https://edustepup.com/assets/js/wow.min.js"></script>

    <script type="text/javascript" src="https://edustepup.com/assets/js/main.min.js"></script>
    <script src="https://edustepup.com/assets/js/slick.min.js"></script>
    <script type="text/javascript" src="https://edustepup.com/assets/js/footer.min.js"></script>
    <!-- End Scripts-->
@endpush

</body>

</html>
