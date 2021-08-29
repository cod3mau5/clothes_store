<!-- footer -->
<footer class="c-footer container-fluid j-footer" tabindex="0">
    <div class="container-fluid-1200 j-footer-bottom-vue" v-cloak>
        <div class="row">

            <div>
                <div class="col-xs-6 ft-left">
                    <div class="row">
                        <div class="col-xs-3 ft-left-list" v-for="(item,index) in itemsPolicy">
                            <h6 tabindex="0">@{{item.titleGroup}}</h6>
                            <ul tabindex="0">
                                <li v-for="(subItem,subIndex) in item.titleList">
                                  <a :href="subItem.jumpType == 1 ? location.origin + '/' + subItem.article.relativeUrl + '-a-' + subItem.value + '.html' : subItem.value"
                                    :data-url="subItem.jumpType == 1 ? location.origin + '/' + subItem.article.relativeUrl + '-a-' + subItem.value + '.html' : subItem.value"
                                    :data-index="index"
                                    :data-subindex="subIndex"
                                    :data-titlegroup="item.titleGroup"
                                    :data-title="subItem.title"
                                    tabindex="0"
                                    >
                                    @{{subItem.title}}
                                  </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 ft-right">
                        <div class="row">
                            <div class="col-xs-8">
                                <h6 tabindex="0">@{{communityTitle}}</h6>
                                <ul tabindex="0" class="ft-right-et j-app-icon">
                                    <li v-for="(subItem,subIndex) in itemsCommunity">
                                        <a :href="subItem.jumpHref"
                                          class="ft-community"
                                          target="_blank"
                                          data-type="vk"
                                          :data-url="subItem.jumpHref"
                                          :data-index="subIndex"
                                          :data-title="communityTitle"
                                          tabindex="0"
                                          :aria-label="transformImg(subItem.jumpHref)"
                                          >
                                            <img class="j-verlok-lazy" :data-src="transformImg(subItem.imgSrc)" width="30" height="30" />
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-4">

                                    <h6 tabindex="0">APP</h6>

                                <ul tabindex="0" class="ft-right-et j-app-icon">
                                    <li><a tabindex="0" aria-label="app store" :href="appleUrl()" class="iconfont icon-apple" data-type="apple"></a></li>
                                    <li><a tabindex="0" aria-label="google play" :href="androidUrl()" class="iconfont icon-andriod" data-type="andriod"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="ft-right-email">
                            <h6 tabindex="0">SUSCRÍBETE PARA RECIBIR OFERTAS EXCLUSIVAS, PROMOCIONES Y NOTICIAS DE SHEIN</h6>
                            <div class="ft-right-input">
                                <div class="c-input">
                                  <input placeholder="Tu dirección del Email" type="email" class="j-footer-subscribe">

                                    <div class="input-error-txt j-footer-errormsg"></div>
                                    <div class="input-error-txt j-footer-privacy-tip" style="display: none;">Por favor, acepta nuestra Política de Privacidad y de uso de Cookies.</div>
                                </div>
                                <div class="ft-right-btn">
                                    <button class="she-btn-black j-subscribe-submit">
                                        <div class="j-footer-submit">Suscribir</div>
                                        <div class="la-ball-pulse la-ball-pulse-white she-none">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="ft-right-payment" v-show="logoList && logoList.length" aria-hidden="true">
                            <h6>ACEPTAMOS</h6>
                            <div class="bank-img">
                              <img v-for="item in logoList" :data-src="transformImg(item.url)" class="c-img-con-m j-verlok-lazy" />
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="ft-bottom col-xs-6">
                <span class="ft-bottom-lang" tabindex="0">
                  ©2009-2021 SHEIN Todos los derechos reservados
                </span>
                <ul class="ft-bottom-add" tabindex="0">
                        <li><a href="https://www.shein.com.mx/Privacy-Center-a-1045.html">Centro de Privacidad</a></li>
                        <li><a href="https://www.shein.com.mx/Privacy-Security-Policy-a-282.html">Política de privacidad y cookies</a></li>

                        <li><a href="https://www.shein.com.mx/Terms-and-Conditions-a-399.html">Términos y condiciones</a></li>
                        <li><a href="https://www.shein.com.mx/copyright-noticeam-a-379.html">Aviso de copyright</a></li>





                </ul>
            </div>
            <div class="ft-bottom-icon col-xs-4 she-text-right">
                <a href="javascript:;" tabindex="-1" title="This site is protected by Trustwave's Trusted Commerce program" onclick="javascript:window.open('https://sealserver.trustwave.com/cert.php?customerId=&size=105x54&style=invert&form=&baseURL=fr.shein.com', 'c_TW', 'location=no, toolbar=no, resizable=yes, scrollbars=yes, directories=no, status=no, width=615, height=720'); return false;" oncontextmenu="javascript:alert('Copying Prohibited by Law - Trusted Commerce is a Service Mark of TrustWave Holdings, Inc.'); return false;">
                    <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey-2-e4327f8aca.png" data-src="//sheinsz.ltwebstatic.com/she_dist/images/seal-43f93aaef6.png" alt="This site is protected by Trustwave's Trusted Commerce program" />
                </a>
                <a tabindex="-1" href="http://www.dmca.com/Protection/Status.aspx?ID=8c71f59c-ee5a-4cde-a57f-4bb14086371e&refurl=https://www.shein.com.mx" title="DMCA.com Protection Status">
                    <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey-2-e4327f8aca.png" data-src="//sheinsz.ltwebstatic.com/she_dist/images/DMCA-53fc2e1a50.png" alt="DMCA.com Protection Status" />
                </a>
            </div>
        </div>
    </div>
</footer>
