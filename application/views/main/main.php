<div class="middle container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-10">
                <!-- 메인 슬라이드 -->
                <div class="col-lg-6">
                    <div id="main_slide" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#main_slide" data-slide-to="0" class="active"></li>
                            <li data-target="#main_slide" data-slide-to="1"></li>
                            <li data-target="#main_slide" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item">
                                <img src="application/views/img/main/DSC01290.JPG" alt="...">
                                <div class="carousel-caption">
                                    <h4>First Thumbnail label</h4>
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="application/views/img/main/DSC01290.JPG" alt="...">
                                <div class="carousel-caption">
                                    <h4>First Thumbnail label</h4>
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                </div>
                            </div>

                            <div class="item active">
                                <img src="application/views/img/main/DSC01290.JPG" alt="...">
                                <div class="carousel-caption">
                                    <h4>First Thumbnail label</h4>
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#main_slide" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#main_slide" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>



                </div>

                <!-- 메인 공지사항 -->
                <div class="col-lg-3">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#">공지1</a>
                            <p></p>
                        </li>
                        <li><a href="#">공지2</a></li>

                    </ul>
                </div>


            </div>

            <!-- 검색 -->
            <div class="col-lg-10 col-lg-offset-2">
                <!-- 레시피 검색 -->
                <div class="col-lg-6">
                    <h2>레시피검색</h2>
                    <form class="form-horizontal ">
                    <div class="form-group">
                        <label for="select" class="control-label col-lg-2">분류1</label>
                        <select class="form-control food_search_category col-lg-2"></select>

                        <label for="select" class="control-label col-lg-2">분류2</label>
                        <select class="form-control food_search_category col-lg-2"></select>

                        <label for="select" class="control-label col-lg-2">분류3</label>
                        <select class="form-control food_search_category col-lg-2"></select>
                    </div>
                    <div class="form-group">
                        <label for="inputSearch" class="col-lg-2">음식명 :</label>
                        <input type="text" class="col-lg-4 form-control" id="inputSearch"/>
                    </div>
                    <button class="btn-primary" type="submit">검색</button>
                </form>
                </div>

                <!-- 기관 검색 -->
                <div class="col-lg-6">
                    <h2>기관검색&영양사</h2>
                    <form class="form-horizontal">
                    <div class="form-group">
                        <label for="select" class="col-lg-2 label_for_second_search">전화번호</label>
                        <select class="form-control col-lg-2 ph_num_first" id="select">
                            
                        </select>
                        
                        <input type="text" class="form-control ph_num col-lg-2" />
                        <input type="text" class="form-control ph_num col-lg-2" />

                    </div>

                    <div class="form-group">
                        <label for="" class="col-lg-2 label_for_second_search">영양사이름</label>
                        <input type="text" class="form-control col-lg-4" id="nui_name" />
                    </div>

                    <button class="btn-primary" type="submit">검색</button>
                </form>
                </div>
                
            </div>


        </div>


    </div>