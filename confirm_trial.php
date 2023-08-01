<!DOCTYPE html>
<html>
   <head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script>
         function functionConfirm(msg, myYes, myNo) {
            var confirmBox = $("#confirm");
            confirmBox.find(".message").text(msg);
            confirmBox.find(".yes,.no").unbind().click(function() {
               confirmBox.hide();
            });
            confirmBox.find(".yes").click(myYes);
            confirmBox.find(".no").click(myNo);
            confirmBox.show();
         }

         function Confirmation(){
   let Confirmation= confirm("Are you sure about your selection?");
   if (Confirmation){
      alert("votes submitted successful");
   }
   else{
      alert("cancelled");
   }
}
      </script>
       <style>
         #confirm {
            display: none;
            background-color: #91FF00;
            border: 1px solid #aaa;
            position: fixed;
            width: 250px;
            left: 50%;
            margin-left: -100px;
            padding: 6px 8px 8px;
            box-sizing: border-box;
            text-align: center;
         }
         #confirm button {
            background-color: #48E5DA;
            display: inline-block;
            border-radius: 5px;
            border: 1px solid #aaa;
            padding: 5px;
            text-align: center;
            width: 80px;
            cursor: pointer;
         }
          #confirm .message {
            text-align: left;
         }
      </style>
   </head>
   <body>
      <div id="confirm">
         <div class="message"></div>
         <button class="yes">Yes</button>
         <button class="no">No</button>
      </div>
      <button onclick = 'functionConfirm("Do you like Football?", function yes() {
         alert("Yes")
      },
      function no() {
         alert("no")
      });'>submit</button>
   </body>
</html>