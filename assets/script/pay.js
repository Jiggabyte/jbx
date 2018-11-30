function payWithPaystack(userMail) {

    var handler = PaystackPop.setup({
        key: 'pk_test_55779470804039289a4dbac4dab817d3d9043f8e', //put your public key here
        email: userMail, //put your customer's email here
        amount: 200000, //amount the customer is supposed to pay
        callback: function (response) {
            //after the transaction have been completed
            //make post call  to the server with to verify payment
            //using transaction reference as post data
            $.post("verify.php", {reference:response.reference}, function(data){
                if(data == "success") {
                    //successful transaction
                    alert('Transaction was successful');
                    document.querySelector('#app').submit();
                } else {
                    //transaction failed
                    alert(data);
                    window.location = 'apply.php';

                }
            });
        },
        onClose: function () {
            //when the user close the payment modal
            alert('Transaction cancelled');
            window.location = 'apply.php';
        }
    });
    handler.openIframe(); //open the paystack's payment modal
}