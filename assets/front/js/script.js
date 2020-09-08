// 	alert('sdfadf')
// $(document).ready(function() {

// 	function reload_data(act, id){

// 		let base_url = $('input[name=base_url').val()
// 		$.ajax({
// 			url: `${base_url}/home/get_${act}/${id}`,
// 			dataType: 'json',
// 			success:function(data){
// 				let isi = []
// 				$.each(data, function(index, val) {
// 					isi += `<div class="col-lg-3 col-md-6 col-12">
// 				                <!-- single-property Start -->
// 				                <div class="single-property mt-30">
// 				                    <div class="property-img">
// 				                        <a href="properties-details.html">
// 				                            <img src="${base_url}/assets/upload/${data.gambar}" alt="">
// 				                        </a>
// 				                        <span class="level-stryker">FOR RENT</span>
// 				                    </div>
// 				                    <div class="property-desc">
// 				                        <h4><a href="properties-details.html">${val.nama_kontrakan}</a></h4>
// 				                        <p>
// 				                            <span class="location">${val.lokasi}</span>
// 				                            <span class="property-info">Kosan ${val.kategori}</span>
// 				                        </p>
// 				                        <div class="price-box">
// 				                            <p>${val.harga}/${val.type} </p>
// 				                        </div>
// 				                    </div>
// 				                </div><!-- single-property End -->
// 				            </div>`
// 				});
// 				$(`#reload_${act}`).html(isi)
// 			}
// 		})
// 	}
// 	reload_data('rekomendasi',6)
// 	console.log($('input[name=rekomendasi]'))
// 	$('input[name=rekomendasi]').change(function(event) {
// 		alert('adsf')
// 		reload_data('rekomendasi',$(this).val())
// 	});

	
	
// });