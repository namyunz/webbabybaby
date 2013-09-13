<div class="row">
            <div class="col-lg-3">
                <div class="bs-sidebar hidden-print affix" role="complementary">
                    <ul class="nav bs-sidenav">

                        <li>
                            <a href="#">회원가입</a>
                            <ul class="nav">
                                <li><a href="#overview-doctype">회원정보</a></li>
                                <li><a href="#overview-mobile">회원탈퇴</a></li>
                                <li><a href="#overview-responsive-images">기타의견</a></li>

                            </ul>
                        </li>

                    </ul>
                </div>

            </div>

            <div class="col-lg-9">
                <div class="well">
                    <form class="bs-example form-horizontal">
                        <fieldset>
                            <h3 class="sub_title">로그인 정보</h3>
                            <!-- ID Group-->
                            <div class="form-group">
                                <label for="inputID" class="col-lg-2 control-label">ID</label>

                                <div class="col-lg-3">
                                    <input type="text" class="form-control input_form" id="inputID" placeholder="ID">
                                </div>
                                <button type="button" class="btn-primary btn dupli_detection_btn">중복확인</button>
                            </div>

                            <!-- Password Group-->
                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control input_form col-lg-6" id="inputPassword" placeholder="Password">
                                    <input type="password" class="form-control input_form col-lg-6" id="inputPassword2" placeholder="again" />
                                </div>
                            </div>

                            <!-- 영양사 -->
                            <h3 class="sub_title">부가 정보- 영양사</h3>
                            <!-- 이름 -->
                            <div class="form-group">
                                <label for="inputName" class="col-lg-2 control-label">이름</label>

                                <div class="col-lg-3">
                                    <input type="text" class="form-control input_form" id="Text1" placeholder="Name">
                                </div>
                                
                            </div>

                            <!-- 성별 -->
                            <div class="form-group">
                                <label class="col-lg-2 control-label">성별</label>
                                <div class="col-lg-10">
                                    <div class="radio col-lg-1">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" class="gender_radios">
                                            남
                                        </label>
                                    </div>
                                    <div class="radio col-lg-1">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" class="gender_radios">
                                            여
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- 생년월일 -->
                            <div class="form-group">
                                <label class="col-lg-2 control-label">생년월일</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control input_birth_form_f col-lg-3" />
                                    <input type="text" class="form-control input_birth_form col-lg-3" />
                                    <input type="text" class="form-control input_birth_form col-lg-3" />

                                </div>
                            </div>

                            <!-- 주소 -->
                            <div class="form-group">

                                <label class="col-lg-2 control-label">주소</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control input_birth_form_f col-lg-3" />
                                    <input type="text" class="form-control input_birth_form col-lg-3" />
                                    <input type="text" class="form-control input_birth_form col-lg-3" />

                                </div>

                            </div>
                            
                            <!-- 기관 등록 -->
                            <h3 class="sub_title">부가 정보2-기관</h3>
                            <!-- 기관 이름 -->
                            <div class="form-group">
                                <label for="inputCO_Name" class="col-lg-2 control-label">이름</label>

                                <div class="col-lg-3">
                                    <input type="text" class="form-control input_form" id="Text2" placeholder="CO_Name">
                                </div>
                                
                            </div>

                            <!-- 주소 -->
                            <div class="form-group">

                                <label class="col-lg-2 control-label">주소</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control input_birth_form_f col-lg-3" />
                                    <input type="text" class="form-control input_birth_form col-lg-3" />
                                    <input type="text" class="form-control input_birth_form col-lg-3" />

                                </div>

                            </div>

                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button class="btn btn-default">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>