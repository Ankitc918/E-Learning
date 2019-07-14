<style>
.master-slider {
    background: #fff;
    border-radius: 4px;
    text-align: center;
    margin-top: 56px;
    display: inline-block;
    padding-bottom: 48px;
    box-shadow: 0 2px 10px 0 rgba(0,0,0,.1);
}
    .tab-courses {
    width: 284px;
    display: inline-block;
    margin-top: 30px;
    border: 2px solid #f1f6fa;
    border-radius: 4px;
    margin-bottom: 32px;
    background: #fff;
}
    .tab-courses .active.link-14sp, .tab-courses .active.link-grey, .tab-courses a.active {
    background: #f1f6fa;
    color: #293031;
    cursor: default;
}

.tab-courses a.active {
    background: #f1f6fa;
    color: #293031;
    cursor: default;
}
    .tab-courses .link-14sp, .tab-courses .link-grey, .tab-courses a {
    width: 140px;
    display: inline-block;
    line-height: 40px;
    font-size: 14px;
    float: left;
    cursor: pointer;
    font-weight: 400;
    color: #118aef;
}

.tab-courses a {
    width: 140px;
    display: inline-block;
    line-height: 40px;
    font-size: 14px;
    float: left;
    cursor: pointer;
    font-weight: 400;
    color: #118aef;
}
    .course-list {
    padding: 0 15px;
}
    .course-list .link-14sp, .course-list .link-grey, .course-list a {
    width: 45%;
    height: 80px;
    border-radius: 4px;
    background-color: #fff;
    box-shadow: 0 2px 20px 0 rgba(0,0,0,.1);
    padding-left: 20px;
    padding-top: 10px;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.29;
    color: #4a4a4a;
    position: relative;
    padding-right: 54px;
    display: inline-block;
    text-align: left;
    vertical-align: top;
    margin-bottom: 30px;
    margin-right: 5%;
    border: 1px solid #e6ecef;
    transition: all .5s ease;
}
    .course-list .link-14sp:before, .course-list .link-grey:before, .course-list a:before {
    width: 5px;
    height: 32px;
    display: inline-block;
    content: "";
    position: absolute;
    top: 10px;
    left: 0;
    background: #ff8c90;
}

.course-list a:before {
    width: 5px;
    height: 32px;
    top: 10px;
    left: 0;
    background: #ff8c90;
}
    .course-list .link-14sp:nth-child(3):before, .course-list .link-grey:nth-child(3):before, .course-list a:nth-child(3):before {
    background: #f1c44a;
}

.course-list a:nth-child(3):before {
    background: #f1c44a;
}
.course-list .link-14sp:before, .course-list .link-grey:before, .course-list a:before {
    width: 5px;
    height: 32px;
    display: inline-block;
    content: "";
    position: absolute;
    top: 10px;
    left: 0;
    background: #ff8c90;
}
    .course-list .link-14sp:nth-child(2):before, .course-list .link-grey:nth-child(2):before, .course-list a:nth-child(2):before {
    background: #00c3e1;
}

.course-list a:nth-child(2):before {
    background: #00c3e1;
}
    .course-list .link-14sp:nth-child(4):before, .course-list .link-grey:nth-child(4):before, .course-list a:nth-child(4):before {
    background: #00d8c0;
}

.course-list a:nth-child(4):before {
    background: #00d8c0;
}
    .course-list .link-14sp:nth-child(5):before, .course-list .link-grey:nth-child(5):before, .course-list a:nth-child(5):before {
    background: #b163ec;
}

.course-list a:nth-child(5):before {
    background: #b163ec;
}
    .course-list .link-14sp:nth-child(6):before, .course-list .link-grey:nth-child(6):before, .course-list a:nth-child(6):before {
    background: #db5eb3;
}

.course-list a:nth-child(6):before {
    background: #db5eb3;
}
  .ng-hide {
    display: none!important;
}
    .course-list .link-14sp, .course-list .link-grey, .course-list a {
    width: 45%;
    height: 80px;
    border-radius: 4px;
    background-color: #fff;
    box-shadow: 0 2px 20px 0 rgba(0,0,0,.1);
    padding-left: 20px;
    padding-top: 10px;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.29;
    color: #4a4a4a;
    position: relative;
    padding-right: 54px;
    display: inline-block;
    text-align: left;
    vertical-align: top;
    margin-bottom: 30px;
    margin-right: 5%;
    border: 1px solid #e6ecef;
    transition: all .5s ease;
}
    .course-list a {
    width: 45%;
    height: 80px;
    border-radius: 4px;
    background-color: #fff;
    box-shadow: 0 2px 20px 0 rgba(0,0,0,.1);
    padding-left: 20px;
    padding-top: 10px;
    color: #4a4a4a;
    position: relative;
    padding-right: 54px;
    display: inline-block;
    text-align: left;
    vertical-align: top;
    margin-bottom: 30px;
    margin-right: 5%;
    border: 1px solid #e6ecef;
}

.course-list a, .descrip_progms h3, p.sub-head {
    font-size: 14px;
    font-weight: 400;
    line-height: 1.29;
}
.link-14sp, .link-grey, a {
    color: #00a6df;
    text-decoration: none;
    font-size: 16px;
    background-color: transparent;
    font-weight: 300;
}
        
.container-fluid:after, .container-fluid:before, .container:after, .container:before, .row:after, .row:before {
    content: " ";
    display: table;
}
.clearfix:after, .container-fluid:after, .container:after, .drop_query .info-tabs, .modal-footer:after, .modal-header:after, .row:after {
    clear: both;
}
.clearfix:after, .clearfix:before, .container:after, .container:before, .row:after, .row:before {
    content: " ";
    display: table;
}
.clearfix:after, .container:after, .modal-footer:after, .modal-header:after, .row:after {
    clear: both;
}
*, :after, :before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
    display:inline-block;position:absolute;top:-40px;bottom:0;margin:auto;background:url(https://www.simplilearn.com/static/frontend/images/home-sprite-d.svg) no-repeat;background-size:639px 348px;box-shadow:0 10px 20px 0 rgba(141,169,188,.2);border-radius:50%}a.prev_arrow{background-position:-109px -19px;left:0}a.next_arrow{background-position:-179px -19px;right:0}.top-sub-menu{display:inline-block;width:100%;text-align:right;background:#e6ecef}.top-sub-menu a{margin-left:40px;font-size:14px;font-weight:400;display:inline-block;line-height:36px;color:#293031}.dropdown_nav .third-level_nav{border:0!important}.dropdown_nav{left:0!important;right:0!important;margin:auto;margin-top:6px!important;box-shadow:0 2px 10px 0 rgba(0,0,0,.1);background:#fff;border-radius:4px}.dropdown_nav .second-level_nav{background:#f1f6fa}.menu-master-prg ul{font-size:12px}.view-more-btn{margin-top:5px}.after-login{display:none;margin-left:60px}.after-login a,.after-login span{font-size:14px;font-weight:500;display:inline-block;line-height:40px;color:#808890}.master-slider .testimonial_div_inner li{display:inline-block;height:192px}.course-list{width:765px;display:block;margin:0 auto}.course-list a{width:217px}.course-list a:nth-child(3),.course-list a:nth-child(6){margin-right:0}header .hover_search form.home_search_form .search_btn span.search_icon{background-position:-109px -266px!important;text-indent:-9999px;width:25px;height:23px;display:inline-block;background:url(https://www.simplilearn.com/ice9/assets/home-sprite-m.svgz) no-repeat;background-size:669px 374px;margin:2px 10px}.home-alumini .view-more-btn{display:none}}.text-center{text-align:center}@media (min-width:1200px){.banner_section .banner-bg{background-size:cover}.master-slider .testimonial_div{width:990px}.course-list{width:854px}.course-list a{width:181px;margin-right:25px!important}.course-list a:last-child,.course-list a:nth-child(4){margin-right:0!important}.ul-iners{width:810px}.testimonial_div_inner li .inner_block_wrapper{margin-right:30px}}header .log-reg-form .modal{display:none}.ng-hide{display:none!important}.hidden_cls,.mob_drop_query [ng-cloak]{display:none}@media (max-width:767px){.master-slider{float:left;width:100%}.master-slider .testimonial_div{width:100%;display:inline-block}.master-slider .ul-iners{width:calc(100% - 5px);float:right}}@media (min-width:992px) and (max-width:1024px){header .hover_search{width:328px}.master-slider .testimonial_div{width:905px}}@media (min-width:768px) and (max-width:991px){.testimonial_div_inner li .inner_block_wrapper{margin-right:30px}.ul-iners{width:690px;margin-right:0}.course-list{width:675px;display:block;margin:0 auto}.course-list a:nth-child(3),.course-list a:nth-child(6){margin-right:0}}.testimonial_div_inner span.meta-text{position:absolute;display:inline-block;bottom:12px;left:12px;font-size:12px;color:#808890}@media(min-width:992px){.tab-courses{margin-top:56px;}.tab-courses a{font-size:14px;font-weight:400}}@media(min-width:768px){.tab-courses {margin-bottom:40px}}.tab-courses{width:284px;display:inline-block;margin-top:30px;border:2px solid #f1f6fa;border-radius:4px;margin-bottom:32px;background:#fff}.tab-courses a{width:140px;display:inline-block;line-height:40px;font-size:14px;float:left;cursor:pointer;font-weight:400;color:#118aef}.tab-courses a.active{background:#f1f6fa;color:#293031;cursor:default}
</style>
                              <div class="container">
                               <div class="master-slider">
                                <div class="tab-courses" ng-init="tab = 1">
                                        <a class="tab active" ng-class="{active:tab == 1}" ng-click="tab = 1;gaHomePageControllerJs.gaHomepageCourseToogle('Popular Clicked');">Popular Courses</a>
                                                            <a class="tab" ng-class="{active:tab == 2}" ng-click="tab = 2;gaHomePageControllerJs.gaHomepageCourseToogle('Trending Clicked');">Trending Courses</a>
                                    </div>
                                                <div class="course-list" ng-show="tab == 1">
                                        <a href="https://www.simplilearn.com/project-management/pmp-certification-training?referrer=home" ng-click="gaHomePageControllerJs.gaHomepageQuickLinkClick('PMP','https://www.simplilearn.com/project-management/pmp-certification-training');">PMP</a>
                                        <a href="https://www.simplilearn.com/big-data-and-analytics/machine-learning-certification-training-course?referrer=home" ng-click="gaHomePageControllerJs.gaHomepageQuickLinkClick('Machine Learning','https://www.simplilearn.com/big-data-and-analytics/machine-learning-certification-training-course');">Machine Learning</a>
                                        <a href="https://www.simplilearn.com/agile-and-scrum/csm-certification-training?referrer=home" ng-click="gaHomePageControllerJs.gaHomepageQuickLinkClick('Scrum Master','https://www.simplilearn.com/agile-and-scrum/csm-certification-training');">Scrum Master</a>
                                        <a href="https://www.simplilearn.com/digital-marketing/digital-marketing-certified-associate-training?referrer=home" ng-click="gaHomePageControllerJs.gaHomepageQuickLinkClick('Digital Marketing','https://www.simplilearn.com/digital-marketing/digital-marketing-certified-associate-training');">Digital Marketing</a>
                                        <a href="https://www.simplilearn.com/cyber-security/ceh-certification?referrer=home" ng-click="gaHomePageControllerJs.gaHomepageQuickLinkClick('Certified Ethical Hacking','https://www.simplilearn.com/cyber-security/ceh-certification');">Certified Ethical Hacking</a>
                                        <a href="https://www.simplilearn.com/blockchain-certification-training?referrer=home" ng-click="gaHomePageControllerJs.gaHomepageQuickLinkClick('Blockchain','https://www.simplilearn.com/blockchain-certification-training');">Blockchain</a>
                                    </div>
                                               
                                                <div class="course-list ng-hide" ng-show="tab == 2">
                                        <a href="https://www.simplilearn.com/cloud-computing/aws-solution-architect-associate-training?referrer=home" ng-click="gaHomePageControllerJs.gaHomepageQuickLinkClick('AWS Solution Architect','https://www.simplilearn.com/cloud-computing/aws-solution-architect-associate-training');">AWS Solution Architect</a>
                                        <a href="https://www.simplilearn.com/tableau-training-and-data-visualization-course?referrer=home" ng-click="gaHomePageControllerJs.gaHomepageQuickLinkClick('Tableau Training','https://www.simplilearn.com/tableau-training-and-data-visualization-course');">Tableau Training</a>
                                        <a href="https://www.simplilearn.com/cloud-computing/devops-practitioner-certification-training?referrer=home" ng-click="gaHomePageControllerJs.gaHomepageQuickLinkClick('DevOps','https://www.simplilearn.com/cloud-computing/devops-practitioner-certification-training');">DevOps</a>
                                        <a href="https://www.simplilearn.com/cloud-computing/implementing-microsoft-azure-infrastrucure-solutions-70-533-certification-training?referrer=home" ng-click="gaHomePageControllerJs.gaHomepageQuickLinkClick('Azure 70-535','https://www.simplilearn.com/cloud-computing/implementing-microsoft-azure-infrastrucure-solutions-70-533-certification-training');">Azure 70-535</a>
                                        <a href="https://www.simplilearn.com/big-data-and-analytics/python-for-data-science-training?referrer=home" ng-click="gaHomePageControllerJs.gaHomepageQuickLinkClick('Data Science - Python','https://www.simplilearn.com/big-data-and-analytics/python-for-data-science-training');">Data Science - Python</a>
                                        <a href="https://www.simplilearn.com/angular-certification-training?referrer=home" ng-click="gaHomePageControllerJs.gaHomepageQuickLinkClick('Angular Training','https://www.simplilearn.com/angular-certification-training');">Angular Training</a>
                                    </div>
                                <a href="https://www.simplilearn.com/search?tag=#/&amp;item_type=course,bundle" class="explore-courses" ng-click="gaHomePageControllerJs.gaHomepageExploreAll();">Explore All Courses</a>
            </div>
</div>