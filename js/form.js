        function displayForm(c) {
            if (c.value == "Communication") {    
                console.log("h");
                jQuery('#comsubcart').toggle('show');
                 jQuery('#navsubcart').hide();
                 jQuery('#radsubcart').hide();
                 jQuery('#wetsubcart').hide();
                 jQuery('#sursubcart').hide();
            }else if (c.value == "Ncvigation") {
                 jQuery('#navsubcart').toggle('show');
                 jQuery('#comsubcart').hide();
                 jQuery('#radsubcart').hide();
                 jQuery('#sursubcart').hide();
                 jQuery('#wetsubcart').hide();
            }else if (c.value == "Surveillance") {
                 jQuery('#sursubcart').toggle('show');
                 jQuery('#comsubcart').hide();
                 jQuery('#navsubcart').hide();
                 jQuery('#radsubcart').hide();
                 jQuery('#wetsubcart').hide();
            }else if (c.value == "Weather System") {
                 jQuery('#wetsubcart').hide();
                 jQuery('#comsubcart').hide();
                 jQuery('#navsubcart').hide();
                 jQuery('#radsubcart').hide();
                 jQuery('#sursubcart').hide();
            }else {
                 jQuery('#radsubcart').toggle('show');
                 jQuery('#comsubcart').hide();
                 jQuery('#navsubcart').hide();
                 jQuery('#wetsubcart').hide();
                 jQuery('#sursubcart').hide();
            }
      };
