      <?php $title="Lago Mar | Desserts" ?>
      <?php include('../includes/menu-scaffold.php') ?>
      <div id="menu" class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
        <div class="menu-container">
            <hr class="menu-line">
            <h1 class="menu-header desserts">Sides &amp; Desserts</h1>
            <hr class="menu-line">
        </div>
        <div id="tab-container" class="tab-container text-center">
          <ul id="nav-tabs" class="nav nav-tabs center-block">
            <li class="tab"><a href="#sides">SIDES</a></li>
            <li class="tab"><a href="#desserts">DESSERTS</a></li>
          </ul>
          <div id="desserts" class="">
            <section class="menu-item">
              <h2 class="item-header">Baklava</h2>
              <h4 class="ingredients">
                Greek Pastry Layered with honey and walnuts
              </h4>
              <div class="text-center">
                <h3 class="price">1.99</h3>
              </div>
            </section>
            <section class="menu-item">
              <h2 class="item-header">Cheescake</h2>
              <h4 class="ingredients">
                Plain New York style cheesecake
              </h4>
              <div class="text-center">
                <h3 class="price">3.29</h3>
              </div>
            </section>
            <section class="menu-item">
              <h2 class="item-header">Cannoli</h2>
              <h4 class="ingredients">
                Tube-shaped pastry filled with sweet cream and chocolate chips
              </h4>
              <div class="text-center">
                <h3 class="price">3.79</h3>
              </div>
            </section>
            <section class="menu-item">
              <h2 class="item-header">Ice cream</h2>
              <h4 class="ingredients">
                Flavors vary weekly!
              </h4>
              <div class="text-center ice-cream">
                <h3 class="price">Single 1.85</h3>
                <h3 class="price">Double 2.85</h3>
              </div>
            </section>
          </div>
          <div id="sides" class="">
            <section class="menu-item">
              <h2 class="item-header">French Fries</h2>
              <div class="text-center">
                <h3 class="price">3.59</h3>
              </div>
            </section>
            <section class="menu-item">
              <h2 class="item-header">Onion Rings</h2>
              <div class="text-center">
                <h3 class="price">4.59</h3>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
    <?php include("../includes/footer.php") ?>
    <script src="../js/jquery.easytabs.min.js" charset="utf-8"></script>
    <script type="text/javascript">
      $(function(){
        $('#tab-container').easytabs();
      });
    </script>
    <script src="../js/nav.js" charset="utf-8"></script>
    <script src="../js/paginate.js" charset="utf-8"></script>
    <script src="../js/menu.js" charset="utf-8"></script>
  </body>
</html>
