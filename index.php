<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="calculates the take home pay" />
  <meta name="keywords" content="mths, ics2o" />
  <meta name="author" content="Adam" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-deep_orange.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Pay and Taxes</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Pay and Taxes</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/download.jpeg" alt="Taxes image" />
      </div>
      <div class="page-content">Plese enter employment information:</div>
      <br />
      <!-- Simple Textfield for length of side a-->
      <form action="answer.php" method="POST">
        <div class="mdl-textfield mdl-js-textfield">
          <!-- input pattern attribute -->
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="work-hours" />
          <!-- mdl-textfield__label -->
          <label class="mdl-textfield__label" for="work-hours">Work hours ... (Weekly)</label>
          <!-- class "mdl-textfield__error" -->
          <span class="mdl-textfield__error">Input is not a number</span>
        </div>
        <br />
        <div class="mdl-textfield mdl-js-textfield">
          <!-- input pattern attribute -->
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="pay-rate" />
          <!-- mdl-textfield__label -->
          <label class="mdl-textfield__label" for="work-hours">Pay rate ... (Hourly)</label>
          <!-- class "mdl-textfield__error" -->
          <span class="mdl-textfield__error">Input is not a number</span>
        </div>
        <br />
        <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
      </form>
    </main>
  </div>
</body>

</html>