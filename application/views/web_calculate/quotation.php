<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap');

  body {

    font-family: 'Lexend', sans-serif;

  }

  .header_nav .navbar-img img {
    max-width: 20%;
  }

  .header_nav .nav-item {
    margin: .625rem;
    color: black;
  }

  .header_nav.nav-item .nav-link {
    font-size: 15px;
    font-weight: bold;
    color: black;

  }

  .navbar-nav .nav-link {
    color: black;
  }

  .home-main .home-head .home-items {
    margin-top: 0;
  }

  .home-items .item {
    height: 200px;
    width: 300px;

  }

  .item_s .item {

    margin-left: 50%;

  }

  .img {
    height: 60%;
    width: 60%;
    border-radius: 10px;
    margin-top: -13%;
    margin-left: 20%;

  }

  .about_img {

    background-image: url("<?php echo base_url('assets/calculate/img/earth.png'); ?>");
    background-repeat: no-repeat;
    background-size: cover;

  }

  table,
  th,
  td {
    border: 2px solid #045887;
    border-collapse: collapse;
  }

  th {
    background-color: #045887;
    color: white;
  }

  form a {
    color: black;
  }
</style>
<script>
  $(document).ready(function() {
    const content = decodeURIComponent(getParameterByName('content'));

    $('#target_element').html(content);
  });


  function getParameterByName(name) {
    name = name.replace(/[\[\]]/g, '\\$&');
    const regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
      results = regex.exec(window.location.href);
    if (!results) return null;
    if (!results[2]) return '';
    return results[2].replace(/\+/g, ' ');
  }
</script>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Details</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th,
    td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
  </style>
</head>

<body>
  <header class="header_nav" style=" background-color: rgb(187, 225, 236); width:100%; top:0px;">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-img" href="#">
          <img src="<?php echo base_url('assets/calculate/img/logo.png'); ?>" alt="">
        </a>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav menu-navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">www.digitalutilazation.com</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="home-main container">
    <div class="home-head row ">

      <div class="img">
        <img src="<?php echo base_url('assets/calculate/img/svg.png'); ?>">
      </div>
      <div class="home-items  ">
        <div class="item_about ">
          <center>
            <h1>Website Design Proposal</h1>
          </center><br>
        </div>
        <div class="item_s d-flex center">
          <div class="title ">
            <span style="color: #4ab7e5; font-size: 30px;">Client Details</span><br>
            <span class="text-center"><?php echo isset($_SESSION['web_cal']['name']) ? $_SESSION['web_cal']['name'] : ''; ?><br>
              <?php echo isset($_SESSION['web_cal']['phone']) ? $_SESSION['web_cal']['phone'] : ''; ?><br>
              <?php echo isset($_SESSION['web_cal']['email']) ? $_SESSION['web_cal']['email'] : ''; ?><br>
              <?php echo isset($_SESSION['web_cal']['city']) ? $_SESSION['web_cal']['city'] : ''; ?>
            </span>
          </div>
          <div class="item">
            <span style="color:#4ab7e5; font-size: 30px;">Company Details</span><br>
            B M Digital Utilization LLP<br>
            Mobile:+91 98098767<br>
            info.bmdu@gmail.com<br>
            CIN: 123456789
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="about_img">
    <div class="home-main container">
      <div class="about_section">
        <h3>TO</h3>
        <h4>Dear <span style="color: #4ab7e5;"><?php echo isset($_SESSION['web_cal']['name']) ? $_SESSION['web_cal']['name'] : ''; ?></span></h4>
        <p>B M Digital Utilization LLP is a leading website designing company fuelled with
          the motto of developing a "Website For Everyone". Envisioning itself as a leader in this industry,
          BMDU is growing significantly to create a monopoly in the market. From India to the US,
          BMDU has developed a brand name in most geographical locations globally with special
          emphasis on India,USA, Canada, UK,Australia, Germany, France, Italy and the MENA region.<br>
          The enclosed proposal outlines the details of what we’ll do and how successful we’ve been atdoing
          this for other businesses. In fact, we guarantee for the very best services and best in classproduct
          development. I would like to tell you that we are having a very good expertise in developingWeb related
          tools and software with the use of High-end technology Developed by Microsoft. Weare developing the same
          kind of stuff for many of our clients.<br>
          BMDU has become a household name today across the globe with their seasoned team of experts that takes
          every challenge as an opportunity to deliver highly efficient and customized websites with a 99% delivery
          rate. BM Digital Utilization is no ordinary website designing company but is the brand in the industry and its
          mission is to make that name resound globally. BMDU is the only website designing
          company ranking on top of Google and other search engines in more than 100 major cities of the world.</p>
      </div>
      <div class="vision">
        <h3 style="color:#4ab7e5;">Our Vision</h3>
        <p>The vision of BMDU is "Let’s Fly Digital" which means that from India to the US, any individual,
          rich or poor, irrespective of their background, business and class should have a website.As our
          business grows and expands, they have promised this commitment to themselves to contribute the maximum share
          of their company"s profit towards charity and they urge other startups and businesses to follow the same.
        </p>
      </div>
      <div class="tech">
        <h3 style="color:#4ab7e5;">Tecknology</h3>
        <p> <span style="font-size: 20px; font-weight: bold;">Design:</span>&nbsp;For designing website we will use
          Html5, Bootstrap, JQuery, JS etc</p>
        <hr>
        <p>
        <p> <span style="font-size: 15px; font-weight: bold;">Development:</span>&nbsp; PHP , MYSQL </p>
      </div>
    </div>
  </div>
  <br><br>
  <div class="home-main container">
    <table style="width:100%">
      <tr>
        <th colspan="2">Technology:</th>
      <tr style="background-color:#e8efff;">
        <td>Design</td>
        <td>For designing website we will use Html5, Bootstrap, JQuery, JS etc</td>
      </tr>
      <tr>
        <td>Development</td>
        <td>PHP, My Sql</td>

      </tr>
    </table><br>
    <table id="orderTable" style="width:100%">
      <thead>
        <tr>
          <th>Website Key Featured</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table><br>
    <table style="width:100%">
      <tr>
        <th colspan="2">Our Services</th>
      <tr style="background-color:#e8efff;">
        <td>1 Month Maintenance</td>
        <td>Included</td>
      </tr>
      <tr>
        <td>24*7 Support</td>
        <td>Included</td>

      </tr>
      <tr style="background-color: #e8efff;">
        <td>Admin Suppor</td>
        <td>Included</td>

      </tr>
    </table><br>
    <table style="width:100%">
      <tr>
        <th colspan="1">Time Frame </th>
        <th>Days</th>
      </tr>
      <tr style="background-color:#e8efff;">
        <td>Website Design </td>

      </tr>
      <tr>
        <td>We required Advance payment to initiate the Project</td>
        <td>100%</td>

      </tr>
    </table><br>
    <p> <span style="color: red;">** Note: Only working days count. And feedback day would not be count.</span></p>
 
    <table style="width:100%">
      <tr>
        <th colspan="1">Payment Term </th>
        <th>Days</th>
      </tr>
      <tr style="background-color: #e8efff;">
        <td>Website Design </td>
        <td>10 TO 15 Day</td>
      </tr>
    </table><br>
    <table style="width:100%">
      <tr>
        <th colspan="4">Payment Option</th>
      <tr style="background-color:#e8efff;">
        <td colspan="4">Our Bank Account Details</td>

      </tr>
      <tr>
        <td>Beneficiary name</td>
        <td>BM Digital Utilization LLP</td>

      </tr>
      <tr style="background-color: #e8efff;">
        <td>Bank</td>
        <td>Induslnd Bank</td>
      </tr>
      <tr>
        <td>Account No</td>
        <td>257428178501</td>
      </tr>
      <tr style="background-color:#e8efff;">
        <td>NEFT/IFSC code</td>
        <td>INDB0000036</td>
      </tr>
      <tr>
        <td>Branch</td>
        <td>Sec-18 Noida Uttar Pradesh</td>
      </tr>



    </table><br>


  </div>

  <div class="about_img">
    <div class="home-main container">
      <div class="vision">
        <center>
          <br><br>
          <h3 style="color: #4ab7e5;">Terms and Conditions</h3>
        </center><br>
        <p>1. BMDU will commence work on the Project upon receipt of a email confirmation.Completion
          of the work will then be carried out within the proposed schedule. This will bedependent on
          the Client providing content/information for the Project timely and failure by the Clientto provide content/
          information within the agreed time period will result in the Project being rescheduled, and re-costed.
          <br><br> 2. The estimates provided in the agreement are based on the requirements specified in thedocument.
          Any change in the requirements or delays in communication will have a direct impact
          onthe cost of the Project, which will be calculated and invoiced by CssFounder Pvt. Ltd. on the Client.
          <br><br>3. The estimates provided in the agreement are based on the requirements specified in the document.
          Any change in the requirements or delays in communication will have
          a direct impact onthe cost of the Project, which will be calculated and invoiced by BMDu on the Client.
          <br><br>4. No-Refund shall be issued after the home page has been developed and is approved by client.Any
          claims
          regarding the refund after approval of home page will be held invalid and unanswered.
          <br><br>5. These terms and conditions are not limited and may extend further as per company’s
          decisions.The terms and conditions may change without any prior notification.
          <br> <br>6. The Client agrees to indemnify, defend and hold BMDU harmless against any claims brought
          against BMDU to the extent those claims are based upon allegations that the client (a) infringed
          intellectual property rights or (b)
          breached agreement(s) (if any) with any customer/supplier purchasing or licensing any goods or services.
          <br>7. BMDU will not be responsible for any deficiency in the services that is due to incorrect orinaccurate
          information or materials
          supplied by the client, or client’s failure to provide all theinformation and materials required
          <br><br> 8 . Number of revisions will be limited as per company’s policy and there will be a limited
          revisionsavailable for the client. Additional revisions
          will be charged as per fixed pricing which should bediscus with the client upon approval of project.
          <br><br>9. Number of revisions will be limited as per company’s policy and there will be a limited
          revisionsavailable for the client. Additional revisions
          will be charged as per fixed pricing which should bediscus with the client upon approval of project.
        </p>
      </div>
    </div>
  </div>
  </div>
  </section>
  <!----------------------------------------------------------------------->
  <div class="home-main container">

    <section id="contactus">

      <br><br>
      <br>
      <br>
      <div class=" blogs-main container  p-5">
        <div class="blogs-inner row ">
          <h2 style="color:#4ab7e5; margin-left: 20px;">Contact With Us</h2>
          <div class="form-div">
            <form><br>
              <div class="form-row">
                <ul style="list-style: none;">

                  <li><img src="<?php echo base_url('assets/calculate/img/india.webp'); ?>" style="width: 23px;">B-41, B-Block, Sector-63, Noida, Uttar Pradesh 201301 (INDIA)</li><br>

                  <li>
                    <i class="fas fa-envelope"></i>:
                    <a href="#">info@digitalutilization.com</a>
                  </li><br>
                  <li>
                    <i class="fas fa-phone-alt"></i>
                    <a href="#">+1 (368) 999 9940 (CA)</a>
                  </li><br>
                  <li>
                    <i class="fas fa-phone-alt"></i>
                    <a href="#">+91 75994 90885 (IN)</a>
                    <a href="#">+91 75994 90885 (IN)</a>
                  </li>
                </ul>

              </div>
            </form>
          </div>
        </div>
      </div>
  </div>
  </div>
  </section>
  </div>
  </div>
  </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<script>
  function getDataAndDisplayTable() {
    const orderDetails = getData();
    const tableBody = document.querySelector('#orderTable tbody');


    tableBody.innerHTML = '';


    for (let i = 0; i < orderDetails.length; i += 2) {
      const row = tableBody.insertRow();
      const firstCell = row.insertCell();
      const secondCell = row.insertCell();
      firstCell.textContent = orderDetails[i];

      if (orderDetails[i + 1]) {
        secondCell.textContent = orderDetails[i + 1];
      }
    }
  }

  getDataAndDisplayTable();

  function getData() {
    const orderDetails = [];
    let i = 0;
    while (true) {
      const item = sessionStorage.getItem(`orderDetails${i}`);
      if (item === null) {
        break;
      }
      orderDetails.push(item);
      i++;
    }
    return orderDetails;
  }
</script>
<script>
  function openPrintDialog() {
    window.print();
  }
  function openPrintPopupAfterDelay() {
    setTimeout(openPrintDialog, 10000); 
  }
  openPrintPopupAfterDelay();
</script>
<style type="text/css" media="print">
  @page {
    size: A4;
    margin: 0;
  }

  body {
    margin: 0;
    font-family: Arial, sans-serif; 
  }
</style>

