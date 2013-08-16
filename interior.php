<?php 
  
  # This variable is only for the sake of showing the "currently selected"
  # state of a nav item when on a given interior page. It is not necessary
  # for production. See the conditional in the first nav item in header.php
  # for more details.
  $interior = true;
  
  include 'header.php';
?>

<div class="page-content">
  <div class="tabletop-small"></div>

  <div class="row">
    
    <div class="page-heading large-12 columns">
      <img class="page-icon" src="img/interior-page-products-icon.png" alt="Icon of hammer and wrench">
      <h2 class="page-title">Our Products</h2>
    </div>

  </div><!-- .row -->
  
  <div class="row">
    <div class="main-column large-8 columns">

      <div class="product-table-container">
        <div class="product-table">
          <h3 class="product-table-title">Distilled Primary Amines</h3>
          <div class="table-wrapper">
            <table>
              <thead>
                <th>No.</th>
                <th>Chemical<br>Name</th>
                <th>Appearance<br>(25 C)</th>
                <th>Amine Value<br>(mg KOH/g)</th>
                <th>Purity</th>
                <th>MSDS<br>Sheet</th>
              </thead>
              <tfoot></tfoot>
              <tbody>
                <?php for ($i = 0; $i < 8; $i++) { ?>
                <tr <?php if ($i%2) { echo 'class="even"'; } else { echo 'class="odd"'; } ?>>
                  <td>1</td>
                  <td>Laurel Amine</td>
                  <td>Liquid</td>
                  <td>295-305</td>
                  <td>98</td>
                  <td class="download"><a href="#">&#59256;</a></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div><!-- .table-wrapper -->
        </div><!-- .product-table -->
      </div><!-- .product-table-container -->

      <div class="page-content-text">
        <h3>Example Heading</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus unde veritatis explicabo et sunt ut officia non libero aliquid consequuntur modi dolore. Qui laborum id libero quisquam harum. Quos quaerat!</span><span>Delectus mollitia perferendis nisi sapiente obcaecati eaque commodi reiciendis corporis dolore impedit doloremque beatae natus iure saepe quam eos eligendi laboriosam omnis provident totam. Nulla unde magnam ut dolore voluptatem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui consequuntur quo vero unde quos eum dolores tenetur distinctio libero voluptatibus provident adipisci ullam eius nihil ut ipsa odit id ipsam.</p>
      </div><!-- .page-content-text -->

      <div class="bio">
        <img src="http://dummyimage.com/115x115" alt="Staff member photograph" class="bio-photo">
        <div class="bio-text">
          <h3 class="bio-name">John Smith</h3>
          <h4 class="bio-title">Sr. VP of Sales</h4>
          <p class="bio-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas rerum earum possimus dignissimos nobis dolorem ab cupiditate soluta error voluptates laboriosam animi dolorum a maiores neque eum iure perspiciatis quaerat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad reiciendis rem aperiam temporibus in blanditiis sequi. Tempora placeat cupiditate voluptatum quo dolorem nostrum ut autem veniam nesciunt inventore ducimus officiis.</p>
        </div><!-- .bio-text -->
      </div><!-- .bio -->

      <form action="#" method="post">
        <div class="form-row">
          <label for="name">Name</label>
          <input name="name" type="text" class="text-field">
        </div><!-- .form-row -->
        <div class="form-row">
          <label for="email">Email</label>
          <input name="email" type="text" class="text-field">
        </div><!-- .form-row -->
        <div class="form-row">
          <label for="message">Message</label>
          <textarea class="text-field textarea" name="message"></textarea>
        </div><!-- .form-row -->
        <input type="submit" class="submit" value="send">
      </form>
    </div><!-- .main-column -->

    <div class="sidebar large-4 columns">
      <div class="sidebar-block product-info">
        <h3 class="sidebar-block-title">More Information</h3>
        
        <h4>Primary Amines</h4>
        <p>Primary Amines are basic starting materials for many cationic and amphoteric surfacants. These surfactants are used to produce textile softeners, dyeing assistants, and static agents germicides, bactericidies.</p>

        <h4>Secondary Amines</h4>
        <p>Secondary Amines are widely used in the production of fabric softeners and other specialty chemicals.</p>

        <h4>Fatty Diamines</h4>
        <p>Diamines are used in the production of ethoxylated diamines and in a variety of oil-field and asphalt formulations.</p>

      </div><!-- .sidebar-block product-info -->

      <div class="sidebar-block contact-info">
        <h3 class="sidebar-block-title">Get In Touch With Us</h3>
        
        <div class="contact-method mail">
          <img src="img/sidebar-contact-location-icon.png" alt="Icon of map location marker" class="contact-method-icon">
          <p class="contact-method-text">
            PO Box 5501<br>
            Greenville SC 29606
          </p><!-- .contact-method-text -->
        </div><!-- .contact-method.mail -->

        <div class="contact-method phone">
          <img src="img/sidebar-contact-phone-icon.png" alt="Icon of telephone receiver" class="contact-method-icon">
          <p class="contact-method-text">
            <strong>T:</strong> (864) 458-7868<br>
            <strong>F:</strong> (864) 458-7783
          </p><!-- .contact-method-text -->
        </div><!-- .contact-method.phone -->

        <div class="contact-method email">
          <img src="img/sidebar-contact-email-icon.png" alt="Icon of envelope" class="contact-method-icon">
          <p class="contact-method-text">
            sales@chem-<br>international.com
            <a href="#" class="contact-button">send a message</a>
          </p><!-- .contact-method-text -->
        </div><!-- .contact-method.email -->

      </div><!-- .sidebar-block contact-info -->
    </div><!-- .sidebar -->
  </div><!-- .row -->
</div><!-- .page-content -->

<?php include 'footer.php' ?>