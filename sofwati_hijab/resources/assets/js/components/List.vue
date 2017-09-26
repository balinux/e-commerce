<template>
        <section>
          <div class="product">
            <div class="sperator text-center">
              <p>KOLEKSI TERBARU</p>
              <div class="sperator-bottom"><img src="images/demo/sperator.png" alt="spertor"/></div>
            </div>
            <div class="product-tab">
              <ul class="products-tabs nav nav-pills">
                <li class="active"><a href="#1a" data-toggle="tab">Chair</a></li>
                <li><a href="#2a" data-toggle="tab">Decoration</a></li>
                <li><a href="#3a" data-toggle="tab">Essential</a></li>
                <li><a href="#4a" data-toggle="tab">Lamp</a></li>
                <li><a href="#5a" data-toggle="tab">Sofar</a></li>
              </ul>
              <div class="desc-review-content tab-content clearfix">
                <div id="1a" class="tab-pane active">
                  <div class="home-1-featured-products">
                    <div class="products-in-category-tabs-wrapper">
                      <div class="products-content">
                        <div class="woocommerce product-listing columns-5 clearfix">


                          <div class="product-item-wrap has-post-thumbnail" v-for='item in barang'>
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-3.jpg" alt="42" title="42" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-4.jpg" alt="47" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-384">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a rel="nofollow" href="#" class="product_type_external button product_type_external"><i class="fa fa-info"></i> Buy Now</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price">
                                  <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>stok : </span><ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>{{item.stok}}</span></ins></span>
                                  <a href="#" target="_blank">
                                  <h3>{{item.stok}} stok</h3></a>
                                  <a href="#" target="_blank">
                                  <h3>{{item.name}}</h3></a>
                              </div>
                            </div>
                          </div>
                          

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="2a" class="tab-pane">
                  <div class="home-1-featured-products">
                    <div class="products-in-category-tabs-wrapper">
                      <div class="products-content">
                        <div class="woocommerce product-listing columns-5 clearfix">
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-1.jpg" alt="41" title="41" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-2.jpg" alt="38" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-386">
                                    <div class="yith-wcwl-wishlistexistsbrowse show"><span class="feedback">The product is already in the wishlist!</span><a href="#">Browse Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" data-product_id="386" rel="nofollow" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>799.00</span></span><a href="#" target="_blank">
                                  <h3>Sicily Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"><span class="on-sale product-flash">8.8%</span><span class="on-sale product-flash">Sale</span></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-3.jpg" alt="42" title="42" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-4.jpg" alt="47" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-384">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a rel="nofollow" href="#" class="product_type_external button product_type_external"><i class="fa fa-info"></i> Buy Now</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price">
                                  <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>499.00</span></del><ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>455.00</span></ins></span><a href="#" target="_blank">
                                  <h3>Nefil Mesh Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-5.jpg" alt="11" title="11" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-6.jpg" alt="40" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-227">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>599.00</span></span><a href="#">
                                  <h3>Ergohuman Mesh Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-7.jpg" alt="30" title="30" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-8.jpg" alt="33" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-227">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" data-product_id="227" rel="nofollow" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>139.00</span></span><a href="#" target="_blank">
                                  <h3>Ottoman Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-9.jpg" alt="49" title="49" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-10.jpg" alt="47" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-226">
                                    <div class="yith-wcwl-add-button show"><a href="#" rel="nofollow" data-product-id="226" data-product-type="simple" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" data-product_id="226" rel="nofollow" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>170.00</span></span><a href="#" target="_blank">
                                  <h3>Coffee Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-11.jpg" alt="39" title="39" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-12.jpg" alt="41" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-225">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>229.00</span></span><a href="#">
                                  <h3>Occasional Arm Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-13.jpg" alt="15" title="15" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-14.jpg" alt="36" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-222">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>139.00</span></span><a href="#">
                                  <h3>Occasional Size Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-15.jpg" alt="37" title="37" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-16.jpg" alt="18" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-222">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a><span class="feedback">Product added!</span><a href="#" rel="nofollow">Browse Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>139.00</span></span><a href="#">
                                  <h3>Occasional Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-17.jpg" alt="24" title="24" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-18.jpg" alt="35" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-227">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>199.00</span></span><a href="#">
                                  <h3>Costes Armchair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"><span class="on-sold product-flash">Sold</span></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-19.jpg" alt="28" title="28" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-20.jpg" alt="36" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-189">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div><a href="#" class="product_type_soldout btn_add_to_cart"><i class="fa fa-shopping-cart"></i></a><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>199.00</span></span><a href="#" target="_blank">
                                  <h3>Ecko Chair – Fabric</h3></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="3a" class="tab-pane">
                  <div class="home-1-featured-products">
                    <div class="products-in-category-tabs-wrapper">
                      <div class="products-content">
                        <div class="woocommerce product-listing columns-5 clearfix">
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-1.jpg" alt="41" title="41" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-2.jpg" alt="38" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-386">
                                    <div class="yith-wcwl-wishlistexistsbrowse show"><span class="feedback">The product is already in the wishlist!</span><a href="#">Browse Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" data-product_id="386" rel="nofollow" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>799.00</span></span><a href="#" target="_blank">
                                  <h3>Sicily Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"><span class="on-sale product-flash">8.8%</span><span class="on-sale product-flash">Sale</span></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-3.jpg" alt="42" title="42" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-4.jpg" alt="47" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-384">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a rel="nofollow" href="#" class="product_type_external button product_type_external"><i class="fa fa-info"></i> Buy Now</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price">
                                  <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>499.00</span></del><ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>455.00</span></ins></span><a href="#" target="_blank">
                                  <h3>Nefil Mesh Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-5.jpg" alt="11" title="11" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-6.jpg" alt="40" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-227">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>599.00</span></span><a href="#">
                                  <h3>Ergohuman Mesh Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-7.jpg" alt="30" title="30" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-8.jpg" alt="33" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-227">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" data-product_id="227" rel="nofollow" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>139.00</span></span><a href="#" target="_blank">
                                  <h3>Ottoman Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-9.jpg" alt="49" title="49" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-10.jpg" alt="47" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-226">
                                    <div class="yith-wcwl-add-button show"><a href="#" rel="nofollow" data-product-id="226" data-product-type="simple" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" data-product_id="226" rel="nofollow" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>170.00</span></span><a href="#" target="_blank">
                                  <h3>Coffee Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-11.jpg" alt="39" title="39" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-12.jpg" alt="41" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-225">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>229.00</span></span><a href="#">
                                  <h3>Occasional Arm Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-13.jpg" alt="15" title="15" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-14.jpg" alt="36" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-222">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>139.00</span></span><a href="#">
                                  <h3>Occasional Size Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-15.jpg" alt="37" title="37" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-16.jpg" alt="18" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-222">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a><span class="feedback">Product added!</span><a href="#" rel="nofollow">Browse Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>139.00</span></span><a href="#">
                                  <h3>Occasional Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-17.jpg" alt="24" title="24" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-18.jpg" alt="35" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-227">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>199.00</span></span><a href="#">
                                  <h3>Costes Armchair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"><span class="on-sold product-flash">Sold</span></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-19.jpg" alt="28" title="28" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-20.jpg" alt="36" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-189">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div><a href="#" class="product_type_soldout btn_add_to_cart"><i class="fa fa-shopping-cart"></i></a><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>199.00</span></span><a href="#" target="_blank">
                                  <h3>Ecko Chair – Fabric</h3></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="4a" class="tab-pane">
                  <div class="home-1-featured-products">
                    <div class="products-in-category-tabs-wrapper">
                      <div class="products-content">
                        <div class="woocommerce product-listing columns-5 clearfix">
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-1.jpg" alt="41" title="41" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-2.jpg" alt="38" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-386">
                                    <div class="yith-wcwl-wishlistexistsbrowse show"><span class="feedback">The product is already in the wishlist!</span><a href="#">Browse Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" data-product_id="386" rel="nofollow" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>799.00</span></span><a href="#" target="_blank">
                                  <h3>Sicily Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"><span class="on-sale product-flash">8.8%</span><span class="on-sale product-flash">Sale</span></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-3.jpg" alt="42" title="42" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-4.jpg" alt="47" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-384">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a rel="nofollow" href="#" class="product_type_external button product_type_external"><i class="fa fa-info"></i> Buy Now</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price">
                                  <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>499.00</span></del><ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>455.00</span></ins></span><a href="#" target="_blank">
                                  <h3>Nefil Mesh Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-5.jpg" alt="11" title="11" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-6.jpg" alt="40" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-227">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>599.00</span></span><a href="#">
                                  <h3>Ergohuman Mesh Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-7.jpg" alt="30" title="30" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-8.jpg" alt="33" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-227">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" data-product_id="227" rel="nofollow" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>139.00</span></span><a href="#" target="_blank">
                                  <h3>Ottoman Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-9.jpg" alt="49" title="49" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-10.jpg" alt="47" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-226">
                                    <div class="yith-wcwl-add-button show"><a href="#" rel="nofollow" data-product-id="226" data-product-type="simple" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" data-product_id="226" rel="nofollow" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>170.00</span></span><a href="#" target="_blank">
                                  <h3>Coffee Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-11.jpg" alt="39" title="39" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-12.jpg" alt="41" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-225">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>229.00</span></span><a href="#">
                                  <h3>Occasional Arm Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-13.jpg" alt="15" title="15" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-14.jpg" alt="36" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-222">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>139.00</span></span><a href="#">
                                  <h3>Occasional Size Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-15.jpg" alt="37" title="37" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-16.jpg" alt="18" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-222">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a><span class="feedback">Product added!</span><a href="#" rel="nofollow">Browse Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>139.00</span></span><a href="#">
                                  <h3>Occasional Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-17.jpg" alt="24" title="24" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-18.jpg" alt="35" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-227">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>199.00</span></span><a href="#">
                                  <h3>Costes Armchair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"><span class="on-sold product-flash">Sold</span></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-19.jpg" alt="28" title="28" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-20.jpg" alt="36" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-189">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div><a href="#" class="product_type_soldout btn_add_to_cart"><i class="fa fa-shopping-cart"></i></a><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>199.00</span></span><a href="#" target="_blank">
                                  <h3>Ecko Chair – Fabric</h3></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="5a" class="tab-pane">
                  <div class="home-1-featured-products">
                    <div class="products-in-category-tabs-wrapper">
                      <div class="products-content">
                        <div class="woocommerce product-listing columns-5 clearfix">
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-1.jpg" alt="41" title="41" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-2.jpg" alt="38" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-386">
                                    <div class="yith-wcwl-wishlistexistsbrowse show"><span class="feedback">The product is already in the wishlist!</span><a href="#">Browse Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" data-product_id="386" rel="nofollow" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>799.00</span></span><a href="#" target="_blank">
                                  <h3>Sicily Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"><span class="on-sale product-flash">8.8%</span><span class="on-sale product-flash">Sale</span></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-3.jpg" alt="42" title="42" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-4.jpg" alt="47" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-384">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a rel="nofollow" href="#" class="product_type_external button product_type_external"><i class="fa fa-info"></i> Buy Now</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price">
                                  <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>499.00</span></del><ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>455.00</span></ins></span><a href="#" target="_blank">
                                  <h3>Nefil Mesh Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-5.jpg" alt="11" title="11" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-6.jpg" alt="40" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-227">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>599.00</span></span><a href="#">
                                  <h3>Ergohuman Mesh Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-7.jpg" alt="30" title="30" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-8.jpg" alt="33" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-227">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" data-product_id="227" rel="nofollow" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>139.00</span></span><a href="#" target="_blank">
                                  <h3>Ottoman Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-9.jpg" alt="49" title="49" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-10.jpg" alt="47" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-226">
                                    <div class="yith-wcwl-add-button show"><a href="#" rel="nofollow" data-product-id="226" data-product-type="simple" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" data-product_id="226" rel="nofollow" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>170.00</span></span><a href="#" target="_blank">
                                  <h3>Coffee Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-11.jpg" alt="39" title="39" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-12.jpg" alt="41" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-225">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>229.00</span></span><a href="#">
                                  <h3>Occasional Arm Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-13.jpg" alt="15" title="15" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-14.jpg" alt="36" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-222">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>139.00</span></span><a href="#">
                                  <h3>Occasional Size Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-15.jpg" alt="37" title="37" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-16.jpg" alt="18" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-222">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a><span class="feedback">Product added!</span><a href="#" rel="nofollow">Browse Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>139.00</span></span><a href="#">
                                  <h3>Occasional Chair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-17.jpg" alt="24" title="24" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-18.jpg" alt="35" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-227">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div>
                                  <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>199.00</span></span><a href="#">
                                  <h3>Costes Armchair</h3></a>
                              </div>
                            </div>
                          </div>
                          <div class="product-item-wrap has-post-thumbnail">
                            <div class="product-item-inner">
                              <div class="product-thumb">
                                <div class="product-flash-wrap"><span class="on-sold product-flash">Sold</span></div>
                                <div class="product-thumb-primary"><img width="300" height="400" src="images/demo/tab-19.jpg" alt="28" title="28" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                                <div class="product-thumb-secondary"><img width="300" height="400" src="images/demo/tab-20.jpg" alt="36" class="attachment-shop_catalog size-shop_catalog"/></div><a href="#" class="product-link">
                                  <div class="product-hover-sign">
                                    <hr/>
                                    <hr/>
                                  </div></a>
                                <div class="product-actions">
                                  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-189">
                                    <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i>    Add to Wishlist</a></div>
                                  </div>
                                  <div class="woocommerce product compare-button"><a href="#" class="compare button">Compare</a></div><a href="#" class="product_type_soldout btn_add_to_cart"><i class="fa fa-shopping-cart"></i></a><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <div class="rate"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>199.00</span></span><a href="#" target="_blank">
                                  <h3>Ecko Chair – Fabric</h3></a>
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
          </div>
        </section>
</template>

<script>
    export default {
        data(){
            return{
                barang:[]
            }
        },
        mounted() {
          axios.get('barang').then((response)=>{this.barang=response.data;});
        }
    }
</script>
