<!doctype html>
<html data-n-head-ssr lang="en" data-n-head="lang">
    <head data-n-head="">
        <title data-n-head="true">SIWO - Detail Pernikahan</title>
        <meta data-n-head="true" charset="utf-8">
        <meta data-n-head="true" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta data-n-head="true" name="google-site-verification" content="XwlEhFGwkgEWWWYmJAnPFlbcL6IjlA3058hZVixpcCg">
        <meta data-n-head="true" data-hid="robots" name="robots" content="index, follow">
        <meta data-n-head="true" data-hid="keywords" name="keywords" content="Wedding, Wedding Site, Wedding Directory, Wedding Inspirations, Wedding Ideas, Bridestory.com, Bride Story, Wedding Websites, Pernikahan">
        <meta data-n-head="true" data-hid="og:title" property="og:title" content="Bridestory.com: Online Wedding Marketplace">
        <meta data-n-head="true" data-hid="og:description" property="og:description" content="Bridestory is home for 20.000+ wedding vendors. Enjoy the best recommendations for wedding venue, wedding planners, photographers, dresses, bridal, and many more according to your budget and preferences.">
        <meta data-n-head="true" data-hid="og:image" property="og:image" content="https://secure-images.bridestory.com/image/upload/v1458716392/banner/opengraph/tagline.png">
        <meta data-n-head="true" data-hid="mobile-web-app-capable" name="mobile-web-app-capable" content="yes">
        <meta data-n-head="true" data-hid="apple-mobile-web-app-title" name="apple-mobile-web-app-title" content="Bridestory">
        <meta data-n-head="true" data-hid="author" name="author" content="Bridestory">
        <meta data-n-head="true" data-hid="theme-color" name="theme-color" content="#FFF9F9">
        <meta data-n-head="true" data-hid="og:type" name="og:type" property="og:type" content="website">
        <meta data-n-head="true" data-hid="og:site_name" name="og:site_name" property="og:site_name" content="Bridestory">
        <meta data-n-head="true" data-hid="description" name="description" content="Temukan 20.000+ vendor pernikahan di Bridestory. Dapatkan rekomendasi terbaik untuk venue pernikahan, wedding planners, fotografer, gaun pengantin dan lainnya sesuai budget dan preferensi Anda.">
        <link data-n-head="true" rel="icon" type="image/x-icon" href="/favicon.ico">
        <link data-n-head="true" rel="search" type="application/opensearchdescription+xml" title="Bridestory" href="/opensearch.xml">
        <link data-n-head="true" rel="manifest" href="/_nuxt/manifest.80bb1612.json">
        <link data-n-head="true" rel="shortcut icon" href="/_nuxt/icons/icon_64.9daec1.png">
        <link data-n-head="true" rel="apple-touch-icon" href="/_nuxt/icons/icon_512.9daec1.png" sizes="512x512">
        <link data-n-head="true" rel="alternate" hreflang="x-default" href="https://www.bridestory.com/id/wedding-details">
        <link data-n-head="true" rel="alternate" hreflang="en" href="https://www.bridestory.com/id/wedding-details">
        <link href="{{url('assets/css/tes1.css')}}" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
    </head>
    <body data-n-head="">
        <div data-server-rendered="true" id="__nuxt">
            <div class="is-loading full" data-v-1011fd01>
                <img src="https://alexandra.bridestory.com/image/upload/assets/temp-BJ_LhshVU.png" temp-data-srcset="https://london.bridestory.com/image/upload/dpr_1.0,f_auto,fl_progressive,q_80,h_40,w_40,c_fill,g_faces/v1/assets/images/desktop/loaderfaster.gif 1x, https://london.bridestory.com/image/upload/dpr_2.0,f_auto,fl_progressive,q_80,h_40,w_40,c_fill,g_faces/v1/assets/images/desktop/loaderfaster.gif 2x, https://london.bridestory.com/image/upload/dpr_3.0,f_auto,fl_progressive,q_80,h_40,w_40,c_fill,g_faces/v1/assets/images/desktop/loaderfaster.gif 3x" class="bg-img-placeholder" data-v-baf01128 data-v-1011fd01>
            </div>
            <div id="__layout">
                <div class="wedding-details" data-v-03d58c9a>
                    <div class="wedding-details__content" data-v-03d58c9a>
                        <div data-v-1533fc41="" data-v-03d58c9a="" class="wd-section">
                            <div data-v-1533fc41="" class="wd-section__container">
                                <h2 data-v-1533fc41="">Detail Pernikahan</h2>
                                <p data-v-1533fc41="" style="width: 516px;height: 30px;">
                                    Ceritakan sedikit tentang Anda dan rencana pernikahan Anda agar kami dapat memberikan rekomendasi vendor dan konten yang lebih baik.
                                </p>
                                <form id="regForm" action="{{ url('detailpernikahansave') }}" method=post>
                                @csrf

                                <!-- One "tab" for each step in the form: -->
                                <div class="tab">
                                    <div data-v-1533fc41="" class="wd-section__content">
                                        <div data-v-1533fc41="" class="wd-section__content__header">
                                            <img data-v-5dc4c71a="" src="https://alexandra.bridestory.com/image/upload/assets/bride-S1-YlyzY7.png" alt="my-name" title="my-name" class="icon">
                                            <h3 data-v-1533fc41="">Nama Calon Pengantin Pria </h3>
                                        </div>
                                        <div data-v-1533fc41="" id="my-name" class="wd-section__content__form">
                                            <div data-v-1533fc41="" class="form-input style-1">
                                                <input data-v-1533fc41="" type="text" placeholder="Nama depan" class="" id="prianamad" name="prianamad">
                                            </div> 
                                            <div data-v-1533fc41="" class="form-input style-1">
                                                <input data-v-1533fc41="" type="text" placeholder="Nama belakang" class="" id="prianamab" name="prianamab">
                                            </div> <!---->
                                        </div> 
                                        <div data-v-1533fc41="" class="wd-section__content__header">
                                            <img data-v-5dc4c71a="" src="https://alexandra.bridestory.com/image/upload/assets/bride-S1-YlyzY7.png" alt="my-name" title="my-name" class="icon">
                                            <h3 data-v-1533fc41="">Nama Calon Pengantin Wanita </h3>
                                        </div>
                                        <div data-v-1533fc41="" id="my-name" class="wd-section__content__form">
                                            <div data-v-1533fc41="" class="form-input style-1">
                                                <input data-v-1533fc41="" type="text" placeholder="Nama depan" class="" id="wanitanamad" name="wanitanamad">
                                            </div> 
                                            <div data-v-1533fc41="" class="form-input style-1">
                                                <input data-v-1533fc41="" type="text" placeholder="Nama belakang" class="" id="wanitanamab" name="wanitanamab">
                                            </div> <!---->
                                        </div>                                     
                                    </div>
                                </div>
                                <div class="tab">
                                    <div data-v-1533fc41="" class="wd-section__content">
                                        <div data-v-1533fc41="" class="wd-section__content__header">
                                            <img data-v-5dc4c71a="" src="https://alexandra.bridestory.com/image/upload/assets/location-SJfxfK_FQ.png" alt="my-name" title="my-name" class="icon">
                                            <h3 data-v-1533fc41="">Kami akan menikah di </h3>
                                        </div>
                                        <div data-v-1533fc41="" id="my-name" class="wd-section__content__form">
                                            <div data-v-1533fc41="" class="form-input style-1">
                                                <select class="list-dt" id="zona" name="zona" onchange="loadCity(this.value);">
                                                <optgroup label="Se-Barlingmascakeb">
                                                    <option value="Purwokerto">Purwokerto</option>
                                                    <option value="Purbalingga">Purbalingga</option>
                                                    <option value="Cilacap">Cilacap</option>    
                                                </optgroup></select>
                                                <span id="cekcitycodeempty"></span>
                                            </div>
                                        </div> 
                                        <div data-v-1533fc41="" class="wd-section__content__header">
                                            <img data-v-5dc4c71a="" src="https://alexandra.bridestory.com/image/upload/assets/bride-S1-YlyzY7.png" alt="my-name" title="my-name" class="icon">
                                            <h3 data-v-1533fc41="">Kami akan menikah tanggal </h3>
                                        </div>
                                        <div data-v-1533fc41="" id="my-name" class="wd-section__content__form">
                                            <div data-v-1533fc41="" class="form-input style-1">
                                                <input data-v-1533fc41="" type="date" min="today" max="2025-12-31" placeholder="Date" class="" id="tanggalnikah" name="tanggalnikah">
                                            </div> <!---->
                                        </div>                                     
                                    </div>
                                </div>
                                <div class="tab">
                                    <div data-v-1533fc41="" class="wd-section__content">
                                        <div data-v-1533fc41="" class="wd-section__content__header">
                                            <img data-v-5dc4c71a="" src="https://alexandra.bridestory.com/image/upload/assets/location-SJfxfK_FQ.png" alt="my-name" title="my-name" class="icon">
                                            <h3 data-v-1533fc41="">Budget pernikahan kami </h3>
                                        </div>        
                                        <input type="number" value="5000" min="0" max="120000" id="budget" name="budget"/>
                                       <!-- <div data-v-1533fc41="" id="rangeslider" class="wd-section__content__form">
                                            <div data-v-1533fc41="" class="form-input style-1">
                                                <div class="budget-slider">
                                                    <span class="range-slider-inner">
                                                        <input type="number" value="5000" min="0" max="120000" step="500" onchange="fetch()"/>
                                                        <span>IDR
                                                            <input type="number" value="5000" min="0" max="120000"/>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div> 
                                        </div> -->
                                        <div data-v-1533fc41="" class="wd-section__content__header">
                                            <img data-v-5dc4c71a="" src="https://alexandra.bridestory.com/image/upload/assets/location-SJfxfK_FQ.png" alt="my-name" title="my-name" class="icon">
                                            <h3 data-v-1533fc41="">Kami akan mengundang tamu </h3>
                                        </div>
                                        <input type="number" value="10" min="5" max="1000" id="tamu" name="tamu"/>
                                       <!-- <div data-v-1533fc41="" id="rangeslider" class="wd-section__content__form">
                                            <div data-v-1533fc41="" class="form-input style-1">
                                                <div class="invitation-slider">
                                                <label data-v-1533fc41="" class="range-text">
                                                    <span class="range-slider rail">
                                                        <input type="range"  value="10" min="5" max="1000" step="5" onchange="fetchTamu()"/>
                                                    </span>
                                                    <input type="number" value="10" min="5" max="1000"/>
                                                    <span data-v-1533fc41>Tamu
                                                    </span>
                                                    
                                                </label>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="tab">
                                    <div data-v-1533fc41="" class="wd-section__content">
                                        <div data-v-1533fc41="" class="wd-section__content__header">
                                            <img data-v-5dc4c71a="" src="https://alexandra.bridestory.com/image/upload/assets/location-SJfxfK_FQ.png" alt="my-name" title="my-name" class="icon">
                                            <h3 data-v-1533fc41="">Acara pernikahan kami </h3>
                                        </div>
                                        <div data-v-1533fc41="" id="my-name" class="wd-section__content__form">
                                            <div data-v-1533fc41="" class="form-input style-1">
                                                <input data-v-1533fc41="" type="radio" name="durasi" id="fullradio" autocomplete ="off" checked value="full" >
                                                <label for="fullradio" class="btn-lg btn-primary btn-block">Full Time
                                                </label>
                                                <h1>tes</h1>
                                                <input data-v-1533fc41="" type="radio" name="durasi" id="halfradio" autocomplete ="off" value="half" >
                                                <label for="halfradio" class="btn-lg btn-primary btn-block">Half Time
                                                   
                                                </label>
                                            </div> <!---->
                                        </div>                                     
                                    </div>
                                </div>
                            </form>
                                
                            </div>
                            <!-- Circles which indicates the steps of the form: -->
                            <div style="text-align:center;margin-top:40px;">
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                            </div>
                            <div data-v-1533fc41="" class="wd-section__control">
                                <div data-v-1533fc41="" class="wd-section__control__button">
                                    <button data-v-1533fc41 class="wd-section__control__button--prev" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                    <button data-v-1533fc41 class="wd-section__control__button--next" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    <div class="wedding-details__decorator" data-v-03d58c9a>
                        <img src="assets/img/tespic.png" alt="Wedding Details" data-v-03d58c9a>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{url('assets/js/detailpernikahan.js')}}"></script>
        
    </body>
</html>
