<footer class="footer-section section ">
   
    <div class="footer-top footer-bg pt-70 pt-md-50 pt-sm-30 pt-xs-20 pb-100 pb-md-90 pb-sm-70 pb-xs-60">
        <div class="container">
           <div class="row">
                <div class="col-coustom-3 col-md-6 col-lg-3 col-12 mt-40">
                    <!-- Footer-widget Start -->
                    <div class="footer-widget">
                        <div class="footer-title">
                            <h3>About</h3>
                        </div>
                        <div class="footer-info">
                            <p>Ortiz is the best and popular real estate to you how all this mistaolt cing pleasure and praising ained wasnad pain was prexplain</p>
                            <div class="newsletter-box">
                                
                                <form id="mc-form" class="mc-form footer-newsletter" >
                                    <input id="mc-email" type="email" autocomplete="off" placeholder="Email for Newsletter" />
                                    <button id="mc-submit"><i class="fa fa-paper-plane"></i></button>
                                </form>
                            </div>
                            
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div><!-- mailchimp-alerts end -->
                        </div>   
                    </div><!-- Footer-widget End -->
                </div>
                <div class="col-coustom-3 col-md-6 col-lg-3 col-12 mt-40">
                    <!-- Footer-widget Start -->
                    <div class="footer-widget">
                        <div class="footer-title">
                            <h3>Popular Post</h3>
                        </div>
                        <div class="footer-info">
                            <div class="single-list">
                                <h4>Duplex Villa Design</h4>
                                <p>Lorem ipsum dolor sit amet, tur acinglit sed do eius </p>
                            </div>
                            <div class="single-list">
                                <h4>Duplex Villa Design</h4>
                                <p>Lorem ipsum dolor sit amet, tur acinglit sed do eius </p>
                            </div>
                        </div>   
                    </div><!-- Footer-widget End -->
                </div>
                <div class="col-coustom-3 col-md-6 col-lg-3 col-12 mt-40">
                    <!-- Footer-widget Start -->
                    <div class="footer-widget">
                        <div class="footer-title">
                            <h3>Quick Link</h3>
                        </div>
                        <div class="footer-info">
                            <ul class="footer-list">
                                <li><a href="service.html">Sercives</a></li>
                                <li><a href="agent.html">Agent</a></li>
                                <li><a href="properties.html">Properties</a></li>
                                <li><a href="features.html">Features</a></li>
                                <li><a href="blog.html">From Blog</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </div>   
                    </div><!-- Footer-widget End -->
                </div>
                <div class="col-coustom-3 col-md-6 col-lg-3 col-12 mt-40">
                    <!-- Footer-widget Start -->
                    <div class="footer-widget">
                        <div class="footer-title">
                            <h3>Contact Us</h3>
                        </div>
                        <div class="footer-info">
                            <ul class="footer-list">
                                <li>
                                    <div class="contact-text">
                                        <i class="glyph-icon flaticon-placeholder"></i> 
                                        <p>256, 1st AVE, Manchester <br>125 , Noth England</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-text">
                                        <i class="glyph-icon flaticon-call"></i> 
                                        <p>
                                            <span>Telephone : <a href="tel:1234566789"> +88 (012) 356 958 45</a></span>
                                            <span>Telephone : <a href="tel:1234566789"> +88 (012) 356 958 45</a></span>
                                        </p>
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-text">
                                        <i class="glyph-icon flaticon-earth"></i>
                                        <p>
                                            <span>Email : <a href="mailto:info@example.com">info@example.com</a></span>
                                            <span>Web : <a href="https://hasthemes.com/">www.example.com</a></span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>   
                    </div><!-- Footer-widget End -->
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Hastech. <a href="https://hasthemes.com/">All rights reserved.</a> </p>
                </div>
            </div>
        </div>
    </div>
    
</footer><!-- Footer Section End -->  
    
    
<!-- JS
============================================ -->

<!-- Map js code here -->

<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM"></script>
<!-- Plugins JS -->
<script src="<?php echo base_url() ?>assets/front/js/plugins.js"></script>
<!-- Map Active JS -->
<script src="<?php echo base_url() ?>assets/front/js/maplace-active.js"></script>
<!-- Main JS -->
<script src="<?php echo base_url() ?>assets/front/js/main.js"></script>
<!-- <script src="<?php echo base_url() ?>assets/front/js/script.js"></script> -->
<script>
$(document).ready(function() {

    function reload_data(act, id){

        let base_url = $('input[name=base_url').val()
        $.ajax({
            url: `${base_url}/home/get_${act}/${id}`,
            dataType: 'json',
            success:function(data){
                let isi = []
                $.each(data, function(index, val) {
                    isi += `<div class="col-lg-3 col-md-6 col-12">
                                <!-- single-property Start -->
                                <div class="single-property mt-30">
                                    <div class="property-img">
                                        <a data-id="${val.id_kontrakan}" class="add_klik" href="$">
                                            <img src="${base_url}/assets/upload/${val.foto}" alt="">
                                        </a>
                                        <span class="level-stryker">FOR RENT</span>
                                    </div>
                                    <div class="property-desc">
                                        <h4><a data-id="${val.id_kontrakan}" class="add_klik" href="${base_url}/home/detail/${val.id_kontrakan}">${val.nama_kontrakan}</a></h4>
                                        <p>
                                            <span class="location">${val.lokasi}</span>
                                            <span class="property-info">Kosan ${val.kategori}</span>
                                        </p>
                                        <div class="price-box">
                                            <p>${val.harga}/${val.type} </p>
                                        </div>
                                    </div>
                                </div><!-- single-property End -->
                            </div>`
                });
                $(`#reload_${act}`).html(isi)
            }
        })
    }

    reload_data('rekomendasi',6)
    $('a#detail_rek').attr('href','<?php echo base_url() ?>home/detail_rekomendasi/6')
    $('select[name=rekomendasi]').change(function(event) {
        let id = $(this).val()
        reload_data('rekomendasi',$(this).val())
        $('a#detail_rek').attr('href','<?php echo base_url() ?>home/detail_rekomendasi/'+$(this).val())
    });

    function incre_click(id_kontrakan){
        let base_url = $('input[name=base_url').val()

        $.ajax({
          url: `${base_url}/home/add_klik/${id_kontrakan}`,
          success: function(data, textStatus, xhr) {
            console.log('success');            
          },
        });
    }
    $('input[name=search_kontrakan]').keyup(function(event) {
        let base_url = $('input[name=base_url').val()
        let isi = $(this).val()
        $.ajax({
            url: `${base_url}/home/search/${isi}`,
            type: 'get',
            dataType: 'json',
            success: function(data){
                let isi = []
                $.each(data, function(index, val) {
                    isi += `<div class="col-lg-3 col-md-6 col-12">
                                <!-- single-property Start -->
                                <div class="single-property mt-30">
                                    <div class="property-img">
                                        <a data-id="${val.id_kontrakan}" class="add_klik" href="$">
                                            <img src="${base_url}/assets/upload/${val.foto}" alt="">
                                        </a>
                                        <span class="level-stryker">FOR RENT</span>
                                    </div>
                                    <div class="property-desc">
                                        <h4><a data-id="${val.id_kontrakan}" class="add_klik" href="${base_url}/home/detail/${val.id_kontrakan}">${val.nama_kontrakan}</a></h4>
                                        <p>
                                            <span class="location">${val.lokasi}</span>
                                            <span class="property-info">Kosan ${val.kategori}</span>
                                        </p>
                                        <div class="price-box">
                                            <p>${val.harga}/${val.type} </p>
                                        </div>
                                    </div>
                                </div><!-- single-property End -->
                            </div>`
                });
                $(`#reload_search`).html(isi)
            }
        })
        
    });
    $(document).on('click', '.add_klik', function(e) {
        incre_click($(this).data('id'))
    });
    
});
</script>

</body>

</html>