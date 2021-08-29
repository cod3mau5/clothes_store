<header class="c-header j-c-header1">

    <div class="config-top-banners j-config-top-banners" style="min-height: 48px;">


        <div class="TOP_BANNER'">
            <a class="j-config-top-banner config-top-banner"  style="height: 48px">
                <div class="config-wrap j-topbanner-fixer"
                        style="background: 'transparent url('https://img.ltwebstatic.com/images3_acp/2021/07/30/16276172586805a3b1a53cf59fd7e7320c89741be5.gif') center / cover'">
                    <div class="config-wrap-center">
                        <div class="count-time">
                                <span class="number" :style="{color: itemData.content.props.items[0].timeNumColor}">@{{timeArray[index].hour}}</span>
                                <em class="text" :style="{color: itemData.content.props.items[0].timeTextColor}">H</em>
                                <span class="number" :style="{color: itemData.content.props.items[0].timeNumColor}">@{{timeArray[index].minute}}</span>
                                <em class="text" :style="{color: itemData.content.props.items[0].timeTextColor}">M</em>
                                <span class="number" :style="{color: itemData.content.props.items[0].timeNumColor}">@{{timeArray[index].second}}</span>
                                <em class="text" :style="{color: itemData.content.props.items[0].timeTextColor}">S</em>
                        </div>
                    </div>
                    <i class="iconfont icon-close j-icon-del top-del-icon"
                        @click="handleClose($event, index)"></i>
                </div>
            </a>
        </div>

    </div>

    <div class="c-header2">
        <div class="header-height j-header-height">
            <div class="header-nav j-header-fixer">
                <div class="container-header-fluid2 header-wrap j-header-wrap">
                    <div class="row">
                        <div class="col-xs-5 header-left j-cm-header-left-outer">
                            <div class="header-left-inner j-cm-header-left-inner">

                            <div class="first-cate-ctn j-cm-first-cate-ctn" style="visibility: hidden;">

                                    <a title="MUJER"
                                        class=' j-nav-first-cate j-nav-first-cate-2 j-nav-first-cate-index0 first-cate  cate-active'
                                        href="https://www.shein.com.mx/?&amp;ici=mx_tab01"
                                        data-index="0"
                                        data-name="MUJER"
                                        data-type="2"
                                        data-channel-name="MUJER"
                                        data-channel_type="2"
                                    >
                                        <span class="c-header2__cate">
                                            MUJER


                                        </span>
                                    </a>

                                    <a title="CURVY + PLUS"
                                        class=' j-nav-first-cate j-nav-first-cate-6  first-cate  '
                                        href="https://www.shein.com.mx/plussize?icn=PlusSizePage&amp;ici=mx_tab02"
                                        data-index="1"
                                        data-name="CURVY + PLUS"
                                        data-type="6"
                                        data-channel-name="CURVY + PLUS"
                                        data-channel_type="6"
                                    >
                                        <span class="c-header2__cate">
                                            CURVY + PLUS


                                        </span>
                                    </a>

                                    <a title="NIÑOS"
                                        class=' j-nav-first-cate j-nav-first-cate-4  first-cate  '
                                        href="https://www.shein.com.mx/kids?icn=KidsHomePage&amp;ici=mx_tab03"
                                        data-index="2"
                                        data-name="NIÑOS"
                                        data-type="4"
                                        data-channel-name="NIÑOS"
                                        data-channel_type="4"
                                    >
                                        <span class="c-header2__cate">
                                            NIÑOS


                                        </span>
                                    </a>

                                    <a title="HOMBRE"
                                        class=' j-nav-first-cate j-nav-first-cate-3  first-cate  '
                                        href="https://www.shein.com.mx/men?icn=MenHomePage&amp;ici=mx_tab04"
                                        data-index="3"
                                        data-name="HOMBRE"
                                        data-type="3"
                                        data-channel-name="HOMBRE"
                                        data-channel_type="3"
                                    >
                                        <span class="c-header2__cate">
                                            HOMBRE


                                        </span>
                                    </a>

                                    <a title="BELLEZA"
                                        class=' j-nav-first-cate j-nav-first-cate-9  first-cate  '
                                        href="https://www.shein.com.mx/beauty?icn=Beauty&amp;ici=mx_tab05"
                                        data-index="4"
                                        data-name="BELLEZA"
                                        data-type="9"
                                        data-channel-name="BELLEZA"
                                        data-channel_type="9"
                                    >
                                        <span class="c-header2__cate">
                                            BELLEZA


                                        </span>
                                    </a>

                            </div>
                            <i class="iconfont icon-announce-left-big j-cm-header-arrow-l" style="display: none;"></i>
                            <i class="iconfont icon-announce-right-big j-cm-header-arrow-r" style="display: none;"></i>

                            </div>
                        </div>
                        <div tabindex="1" aria-label="shein" class="col-xs-2 she-text-center header-logo">



                                    <a id="header_logo_icon" href="{{route('home')}}" >
                                        <img src="{{asset('images/logos/imagiczen.png')}}" alt="">
                                    </a>



                        </div>
                        <div class="col-xs-5 header-right she-text-right">
                            <ul class="free-ship j-free-shipping"></ul>
                            <div class="header-right-dropdown-ctn j-header-right-dropdown-ctn new">
                                <a href="https://www.shein.com.mx/user/auth/login?direction=nav" class="j-ipad-prevent-a j-header-username-icon sa_account">
                                    <i class="iconfont-critical icon-yonghuicon-"></i>
                                    <span class="account-nopenum j-account-nopenum she-hide"></span>
                                </a>
                                <div class="header-right-dropdown user-dropdown j-user-dropdown">
                                    <div class="j-user-dropdown-vue" v-cloak></div>
                                </div>
                            </div>

                            <!-- 购物车 -->
                            <!-- <div class="j-headerbag-container" style="display: none;"></div> -->
                            <div class="j-headerbag-container header-right-dropdown-ctn header-right-no-relative fast-cart-wrap">
                                <a class="j-ipad-prevent-a j-sa-cart-1" href="https://www.shein.com.mx/cart">
                                    <i class="iconfont-critical icon-gouwudai"></i>
                                    <!-- <span class="cart-num she-v-cloak-none" v-cloak>@{{summary.cartNum}}</span> -->
                                </a>
                            </div>

                            <!-- 收藏夹 -->
                            <div class="header-right-dropdown-ctn j-fast-wish sa_collect">
                                <a href="javascript:;" class="header-wishlist" @click="toWishlist">
                                    <i class="iconfont-critical icon-head-save"></i>
                                    <em class="j-header-robot she-hide header-nopenum"></em>
                                    <span class="cart-num she-v-cloak-none" v-cloak>@{{wishNum}}</span>
                                </a>
                            </div>

                            <!-- 客服 -->
                            <div class="header-right-dropdown-ctn header-right-no-relative j-customer-vue j-header-customer she-v-cloak-none" v-cloak v-show="showSustomer" @click="openRobot">
                                <a href="javascript:;" class="header-help" :aria-label="SHEIN_KEY_PC_15732+SHEIN_KEY_PC_16503">
                                    <i class="iconfont-critical icon-kefu-new"></i>
                                    <em class="j-ticket-nopenum j-header-robot she-hide header-nopenum"></em>
                                </a>
                                <div class="c-header-dropdown global-dropdown customer-service-box">
                                    <a class="customer-service-area" href="javascript:;">
                                        <i class="iconfont-critical icon-kefu-new"></i>
                                        <div class="customer-box">
                                            <p class="customer-sub-title">@{{ SHEIN_KEY_PC_15732 }}</p>
                                            <p class="customer-des">@{{ SHEIN_KEY_PC_16503 }}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- 语言&货币 -->
                            <div class="header-right-dropdown-ctn header-right-no-relative j-global-dd-wrap">
                                <a class="header-right-global j-header-right-global" href="javascript:;">
                                    <span class="icon-panel j-earth-icon">
                                        <i class="iconfont-critical icon-head-global"></i>
                                    </span>
                                    <div class="j-switch-language-guide" v-cloak></div>
                                </a>
                                <div class="c-header-dropdown global global-dropdown j-header-location-dropdown">
                                    <!-- <div class="global-title no-border-t">
                                        Localización
                                    </div>
                                    <div class="global-s-drop-ctn j-global-s-drop-ctn j-global-s-drop-ctn-1">
                                        <span class="j-cur-country-sim"></span>
                                        <i class="iconfont icon-jiantou-copy"></i>
                                        <ul class="global-s-drop j-global-s-drop j-global-s-drop-1 j-header-country-ctn" style="display: none">
                                            header_country.html
                                        </ul>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-nav2">
                    <!-- <div class="j-nav2-ctn-holder" style="display: table-cell; width: 100%;"></div> -->

                    <div class="header-v2__two j-category-nav2" style="display: table-cell; width: 100%; vertical-align: top;">
                    <div class="header-v2__two-cell">
                        <nav class="header-v2__nav2">


                        <div class="header-v2__nav2-wrapper">
                            <a title="NOVEDADES"
                                style="color: #000000;"
                                href="https://www.shein.com.mx/daily-new.html?cat_ids=2030&amp;ici=mx_tab01navbar01"
                                class="header-v2__nav2-item"
                            >
                                <span class="header-v2__nav2-txt">
                                    NOVEDADES
                                </span>
                            </a>
                        </div>



                        <div class="header-v2__nav2-wrapper">
                            <a title="#SHEINFW21"
                                style="color: #000000;"
                                href="https://www.shein.com.mx/new-in-trends-sc-00654187.html?ici=mx_tab01navbar02"
                                class="header-v2__nav2-item"
                            >
                                <span class="header-v2__nav2-txt">
                                    #SHEINFW21
                                </span>
                            </a>
                        </div>



                        <div class="header-v2__nav2-wrapper">
                            <a title="#SHEINX"
                                style="color: #000000;"
                                href="https://www.shein.com.mx/campaign/sheinx-formal8?&amp;ici=mx_tab01navbar03"
                                class="header-v2__nav2-item"
                            >
                                <span class="header-v2__nav2-txt">
                                    #SHEINX
                                </span>
                            </a>
                        </div>



                        <div class="header-v2__nav2-wrapper">
                            <a title="ROPA"
                                style="color: #000000;"
                                href="https://www.shein.com.mx/Clothing-c-2035.html?ici=mx_tab01navbar04"
                                class="header-v2__nav2-item"
                            >
                                <span class="header-v2__nav2-txt">
                                    ROPA
                                </span>
                            </a>
                        </div>



                        <div class="header-v2__nav2-wrapper">
                            <a title="VESTIDOS"
                                style="color: #000000;"
                                href="https://www.shein.com.mx/women-dresses-c-1727.html?ici=mx_tab01navbar05"
                                class="header-v2__nav2-item"
                            >
                                <span class="header-v2__nav2-txt">
                                    VESTIDOS
                                </span>
                            </a>
                        </div>



                        <div class="header-v2__nav2-wrapper">
                            <a title="TOPS"
                                style="color: #000000;"
                                href="https://www.shein.com.mx/Tops-c-1766.html?ici=mx_tab01navbar06"
                                class="header-v2__nav2-item"
                            >
                                <span class="header-v2__nav2-txt">
                                    TOPS
                                </span>
                            </a>
                        </div>



                        <div class="header-v2__nav2-wrapper">
                            <a title="ROPA DE BAÑO"
                                style="color: #000000;"
                                href="https://www.shein.com.mx/Beachwear-c-2039.html?&amp;ici=mx_tab01navbar07"
                                class="header-v2__nav2-item"
                            >
                                <span class="header-v2__nav2-txt">
                                    ROPA DE BAÑO
                                </span>
                            </a>
                        </div>



                        <div class="header-v2__nav2-wrapper">
                            <a title="ZAPATOS Y ACCESORIOS"
                                style="color: #000000;"
                                href="https://www.shein.com.mx/category/Shoes-Bags-Accs-sc-00828516.html?ici=mx_tab01navbar08"
                                class="header-v2__nav2-item"
                            >
                                <span class="header-v2__nav2-txt">
                                    ZAPATOS Y ACCESORIOS
                                </span>
                            </a>
                        </div>



                        <div class="header-v2__nav2-wrapper">
                            <a title="HOGAR Y MASCOTAS"
                                style="color: #000000;"
                                href="https://www.shein.com.mx/Home-Living-c-2032.html?ici=mx_tab01navbar09"
                                class="header-v2__nav2-item"
                            >
                                <span class="header-v2__nav2-txt">
                                    HOGAR Y MASCOTAS
                                </span>
                            </a>
                        </div>



                        <div class="header-v2__nav2-wrapper">
                            <a title="#SHEINathome"
                                style="color: #000000;"
                                href="https://www.shein.com.mx/category/SHEIN-AT-HOME-sc-00821707.html?ici=mx_tab01navbar10"
                                class="header-v2__nav2-item"
                            >
                                <span class="header-v2__nav2-txt">
                                    #SHEINathome
                                </span>
                            </a>
                        </div>



                        <div class="header-v2__nav2-wrapper">
                            <a title="REBAJAS"
                                style="color: #000000;"
                                href="https://www.shein.com.mx/campaign/sheinsaleall?&amp;ici=mx_tab01navbar11"
                                class="header-v2__nav2-item"
                            >
                                <span class="header-v2__nav2-txt">
                                    REBAJAS
                                </span>
                            </a>
                        </div>



                        <div class="header-v2__nav2-wrapper">
                            <a title="TARJETA DE REGALO"
                                style="color: #000000;"
                                href="http://www.shein.com.mx/giftcard.html?icn=giftcard&amp;ici=mx_tab01navbar12"
                                class="header-v2__nav2-item"
                            >
                                <span class="header-v2__nav2-txt">
                                    TARJETA DE REGALO
                                </span>
                            </a>
                        </div>



                        <div class="header-v2__nav2-wrapper">
                            <a title="EXPLORA"
                                style="color: #000000;"
                                href="https://www.shein.com.mx/member-image-list.html?ici=mx_tab01navbar13"
                                class="header-v2__nav2-item"
                            >
                                <span class="header-v2__nav2-txt">
                                    EXPLORA
                                </span>
                            </a>
                        </div>


                        </nav>
                    </div>
                    </div>

                    <div class="search-ctn">
                        <div class="j-header-search-container">
                            <!-- search component placeholder -->
                            <div class="header-search">
                                <div class="search-input">
                                    <div class="c-input">
                                        <div class="c-input-inner">
                                            <input type="text" />
                                        </div>
                                        <div class="search-btn she-btn-black">
                                            <i class="iconfont icon-search header1-icon-search"></i>
                                            <i class="iconfont-critical icon-tubiaozhizuomoban header2-icon-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        ;(function() {
            var setCookie = function(name, val, expires, domain) {
                /*setCookie start*/
                var __CurrentMainDomain__ = (function() {
                    var hostnameArray = location.hostname.split('.')
                    return '.' + hostnameArray.slice(-2).join('.')
                })()

                //domain = domain || __CurrentMainDomain__;
                var text = String(encodeURIComponent(val))
                var date = new Date()
                date.setTime(date.getTime() + Number(expires) * 1000)
                text += '; expires=' + date.toUTCString()
                // domain
                text += '; path=/'
                if (typeof domain != 'undefined' && domain != '') {
                    text += '; domain=' + __CurrentMainDomain__
                }

                document.cookie = name + '=' + text
            }
            setCookie('cate_channel_type', 2, 3600 * 24 * 30)

        })();
    </script>

</header>
