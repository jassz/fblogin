
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Blog Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/blog/">

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      ul li{
        display: inline;
      }

      .bg-red{
        background-color: red;
      }

      .bg-white{
        background-color: white;
      }

      .bg-blue{
        background-color: blue;
      }

      .bg-yellow{
        background-color: yellow;
      }

      .bg-signup-btn{
        background-color: #5b9549;
      }

      .text-white{
        color: white;
      }

      .text-grey{
        color: #666666;
      }

      .img-logo{
        width: 230px;
      }

      .img-network{
        width: 120px;
      }

      .font-title{
        font-size: 30px;
      }

      .font-medium{
        font-size: 20px;
      }

      .font-content{
        font-size: 12px;
      }

      .btn-outline{
        border-color: #000000;
        border-width: 1px;
        border-style: solid;
        border-radius: 4px;
        height: 25px;
        
      }

      .text-dob{
        align-self: center;
      }
      
      .line-height-15{
        line-height: 15px;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body style="background-color:#e8eaf2">
    <div class="container-fluids" style="background-color: #44609c;">
      <div class="container">
        <header class="blog-header" >
          <div class="row flex-nowrap justify-content-between align-items-center no-gutters">
            <div class="col-6 ">
              <a class="text-muted" href="#">
                <img class="img-logo" src="./assets/img/icon-facebookwhite-trans.jpg">
              </a>
            </div>
            
            <div class="col-6 d-flex justify-content-end align-items-center">
              <div class="row">
                <div class="col">
                  <span class="font-content text-white">E-mail atau Telefon</span>
                  <br/>
                  <input type="text" class="line-height-15" />
                </div>
                <div class="col p-0">
                  <span class="font-content text-white">Password</span>
                  <br/>
                  <input type="text" class="line-height-15" />
                  <br/>
                  <small class="text-white">Lupa akaun?</small>
                </div>
                <div class="col-auto my-auto">
                  <a class="btn btn-sm  text-white border-shadow" href="#" style="background-color: #4267b2">Log In</a>
                </div>
              </div>  
            </div>
          </div>
        </header>
      </div>
</div>

<div class="container">
   <div class="row flex-nowrap justify-content-between align-items-center no-gutters">
          <div class="col-6" style="align-self: flex-start; margin-top: 40px ">
            <span class="font-weight-bold font-medium">Facebook helps you connect and share with the people in your life.</span>
            <img style='height: 100%; width: 100%; object-fit: contain' class="my-5" src="./assets/img/img-network.png">
          </div>
          <div class="col-6 p-4 d-flex justify-content-end align-items-center">
            <div class="row">
                <div class="col-12">
                  <h2>Create an account</h2>
                </div>
                <div class="col-12 mt-1 mb-3">
                  <span class="font-medium">It's free and always will be.</span>
                </div>
                <div class="col-12">
                  <form>
                    <div class="form-row">
                      <div class="form-group col-6">
                        <!-- <label for="inputEmail4">First Name</label> -->
                        <input type="email" class="form-control" id="inputEmail4" placeholder="First Name">
                      </div>
                      <div class="form-group col-6">
                        <!-- <label for="inputPassword4">Surname</label> -->
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Surname">
                      </div>
                    <div class="form-group col-12">
                      <!-- <label for="inputAddress">Address</label> -->
                      <input type="text" class="form-control" id="inputAddress" placeholder="Mobile number or email address">
                    </div>
                    <div class="form-group col-12">
                      <!-- <label for="inputAddress2">Address 2</label> -->
                      <input type="text" class="form-control" id="inputAddress2" placeholder="New password">
                    </div>
                    <div class="col-12">
                      <div class="form-row">
                        <div class="form-group col-auto">
                          <span class="font-medium">Birthday</span>
                          <fieldset class="date"> 
                          <select class="btn-outline" id="day_start" name="day_start" /> 
                            <option>1</option>       
                            <option>2</option>       
                            <option>3</option>       
                            <option>4</option>       
                            <option>5</option>       
                            <option>6</option>       
                            <option>7</option>       
                            <option>8</option>       
                            <option>9</option>       
                            <option>10</option>       
                            <option>11</option>       
                            <option>12</option>       
                            <option>13</option>       
                            <option>14</option>       
                            <option>15</option>       
                            <option>16</option>       
                            <option>17</option>       
                            <option>18</option>       
                            <option>19</option>       
                            <option>20</option>       
                            <option>21</option>       
                            <option>22</option>       
                            <option>23</option>       
                            <option>24</option>       
                            <option>25</option>       
                            <option>26</option>       
                            <option>27</option>       
                            <option>28</option>       
                            <option>29</option>       
                            <option>30</option>       
                            <option>31</option>       
                          </select>

                          <select class="btn-outline" id="month_start" name="month_start" width="10px"/> 
                            <option>Jan</option>       
                            <option>Feb</option>       
                            <option>Mac</option>       
                            <option>Apr</option>       
                            <option>May</option>       
                            <option>Jun</option>       
                            <option>July</option>       
                            <option>Aug</option>       
                            <option>Sept</option>       
                            <option>Oct</option>       
                            <option>Nov</option>       
                            <option>Dec</option>       
                          </select>


                          <select class="btn-outline" id="year_start" name="year_start" /> 
                            <option>2009</option>       
                            <option>2010</option>       
                            <option>2011</option>       
                            <option>2012</option>       
                            <option>2013</option>       
                            <option>2014</option>       
                            <option>2015</option>       
                            <option>2016</option>       
                            <option>2017</option>       
                            <option>2018</option>       
                          </select> 
                        </fieldset> 
                      </div>
                      <div class="col-4 text-dob line-height-15">
                        <br />
                        <small>Why do I need to provide my date of birth?</small>
                      </div>
                      <!-- <div class="form-group col-md-4">
                        <small>Why do i need to provide my date of birth?</small>
                      </div> -->
                    </div>
                    </div>
                    <div class="col-12">
                      <label class="radio-inline pr-3 m-0">
                        <input type="radio" name="optradio" checked>
                        <span class="pl-2">Female</span>
                      </label>
                      <label class="radio-inline px-3 m-0">
                        <input type="radio" name="optradio">
                        <span class="pl-2">Male</span>
                      </label>
                    </div>
                    <div class="col-8 line-height-15 ">
                      <small style="font-size: 11px" class="text-grey">
                        By clicking Sign Up, you agree to our <a href="#">Terms, Data Policy</a> and <a href="#">Cookie Policy</a>. You may receive SMS notifications from us and can opt out at any time.
                      </small>
                    </div>
                    <div class="col-12 py-4">
                      <button type="button" class="btn btn-success bg-signup-btn border-shadow text-white font-weight-bold font-medium" style="width: 200px">Sign Up</button>
                    </div>
                    <div class="col-12 font-weight-bold">
                      <small class="font-weight-bold text-grey">
                        <a href="#">Create a Page</a> for a celebrity, band or business.
                      </small>
                    </div>
                     
                    <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
                  </div>
                  </form>
                </div>
              </div>
          </div>
        </div>
  </div>

  <div class="container-fluids bg-white">
    <div class="container">
      <footer class="blog-footer bg-white py-5" style="font-size: 13px">
        <ul class="uiList localeSelectorList _2pid _509- _4ki _6-h _6-j _6-i p-0 text-center" data-nocookies="1">
          <li>English (UK)</li> &nbsp;
          <li><a class="_sv4" dir="ltr" href="https://ms-my.facebook.com/" onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;ms_MY&quot;, &quot;en_GB&quot;, &quot;https:\/\/ms-my.facebook.com\/&quot;, &quot;www_list_selector&quot;, 0); return false;" title="Malay">Bahasa Melayu</a></li>&nbsp;
          <li><a class="_sv4" dir="ltr" href="https://zh-cn.facebook.com/" onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;zh_CN&quot;, &quot;en_GB&quot;, &quot;https:\/\/zh-cn.facebook.com\/&quot;, &quot;www_list_selector&quot;, 1); return false;" title="Simplified Chinese (China)">中文(简体)</a></li>&nbsp;
          <li><a class="_sv4" dir="ltr" href="https://id-id.facebook.com/" onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;id_ID&quot;, &quot;en_GB&quot;, &quot;https:\/\/id-id.facebook.com\/&quot;, &quot;www_list_selector&quot;, 2); return false;" title="Indonesian">Bahasa Indonesia</a></li>&nbsp;
          <li><a class="_sv4" dir="ltr" href="https://vi-vn.facebook.com/" onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;vi_VN&quot;, &quot;en_GB&quot;, &quot;https:\/\/vi-vn.facebook.com\/&quot;, &quot;www_list_selector&quot;, 3); return false;" title="Vietnamese">Tiếng Việt</a></li>&nbsp;
          <li><a class="_sv4" dir="ltr" href="https://th-th.facebook.com/" onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;th_TH&quot;, &quot;en_GB&quot;, &quot;https:\/\/th-th.facebook.com\/&quot;, &quot;www_list_selector&quot;, 4); return false;" title="Thai">ภาษาไทย</a></li>&nbsp;
          <li><a class="_sv4" dir="rtl" href="https://ar-ar.facebook.com/" onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;ar_AR&quot;, &quot;en_GB&quot;, &quot;https:\/\/ar-ar.facebook.com\/&quot;, &quot;www_list_selector&quot;, 5); return false;" title="Arabic">العربية</a></li>&nbsp;
          <li><a class="_sv4" dir="ltr" href="https://es-la.facebook.com/" onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;es_LA&quot;, &quot;en_GB&quot;, &quot;https:\/\/es-la.facebook.com\/&quot;, &quot;www_list_selector&quot;, 6); return false;" title="Spanish">Español</a></li>&nbsp;
          <li><a class="_sv4" dir="ltr" href="https://pt-br.facebook.com/" onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;pt_BR&quot;, &quot;en_GB&quot;, &quot;https:\/\/pt-br.facebook.com\/&quot;, &quot;www_list_selector&quot;, 7); return false;" title="Portuguese (Brazil)">Português (Brasil)</a></li>&nbsp;
          <li><a class="_sv4" dir="ltr" href="https://fr-fr.facebook.com/" onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;fr_FR&quot;, &quot;en_GB&quot;, &quot;https:\/\/fr-fr.facebook.com\/&quot;, &quot;www_list_selector&quot;, 8); return false;" title="French (France)">Français (France)</a></li>&nbsp;
          <li><a class="_sv4" dir="ltr" href="https://de-de.facebook.com/" onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;de_DE&quot;, &quot;en_GB&quot;, &quot;https:\/\/de-de.facebook.com\/&quot;, &quot;www_list_selector&quot;, 9); return false;" title="German">Deutsch</a></li>&nbsp;
          <li><a role="button" class="_42ft _4jy0 _517i _517h _51sy" rel="dialog" ajaxify="/settings/language/language/?uri=https%3A%2F%2Fde-de.facebook.com%2F&amp;source=www_list_selector_more" href="#" title="Show more languages"><i class="img sp_dZo1Q2EYqbd_2x sx_09799b"></i></a></li>
        </ul>
        <hr>
        <ul class="uiList localeSelectorList _2pid _509- _4ki _6-h _6-j _6-i p-0 mx-5" data-nocookies="1">
          <li>Sign Up</li> &nbsp; &nbsp;
          <li>Log In</li> &nbsp; &nbsp;
          <li>Messager</li> &nbsp; &nbsp;
          <li>Facebook Lite</li> &nbsp; &nbsp;
          <li>Find Friends</li> &nbsp; &nbsp;
          <li>People</li> &nbsp; &nbsp;
          <li>Profile</li> &nbsp; &nbsp;
          <li>Pages</li> &nbsp; &nbsp;
          <li>Page Categories</li> &nbsp; &nbsp;
          <li>Places</li> &nbsp; &nbsp;
          <li>Games</li> &nbsp; &nbsp;
          <li>Location</li> &nbsp; &nbsp;
          <li>Marketplace</li> &nbsp; &nbsp;
          <li>Group</li> &nbsp; &nbsp;
          <li>Instagram</li> &nbsp; &nbsp;
          <li>Local</li> &nbsp; &nbsp;
          <li>Fundraisers</li> &nbsp; &nbsp;
          <li>About</li> &nbsp; &nbsp;
          <li>Create ad</li> &nbsp; &nbsp;
          <li>Create page</li> &nbsp; &nbsp;
          <li>Developers</li> &nbsp; &nbsp;
          <li>Careers</li> &nbsp; &nbsp;
          <li>Privacy</li> &nbsp; &nbsp;
          <li>Cookies</li> &nbsp; &nbsp;
          <li>AdChoices</li> &nbsp; &nbsp;
          <li>Terms</li> &nbsp; &nbsp;
          <li>Account Security</li> &nbsp; &nbsp;
          <li>Login Help</li> &nbsp; &nbsp;
          <li>Help</li> &nbsp; &nbsp;
        </ul>

  <p>
    <a href="#">Back to top</a>
  </p>
</footer>
    </div>
  </div>


</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
