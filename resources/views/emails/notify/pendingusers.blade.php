<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <title>Sathish - E-Mail Notification Sample</title>
      <style type="text/css">
         @font-face{
         font-family:'Open Sans';
         font-style:normal;
         font-weight:600;
         src:local('Open Sans'),
         local('OpenSans'),
         url('http://fonts.gstatic.com/s/opensans/v10/cJZKeOuBrn4kERxqtaUH3bO3LdcAZYWl9Si6vvxL-qU.woff') format('woff');
         }
         body{
         font-family:'Open Sans', 'Helvetica Neue', Helvetica, sans-serif;
         font-size: 14px;
         line-height: 2em;
         }
         td{
         padding: 10px;
         }
      </style>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>
   <body>
      <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
         <tr>
            <td height="10" bgcolor="#70bbd9" style=" color:#333;">
               <center>
                  <h3>Remainder E-Mail For Notification</h3>
                  <h5>sathishkumar_arumugham@outlook.com</h5>

               </center>
            </td>
         </tr>
         <tr bgcolor="#DDD">
            <td  >
               <table border="0" cellpadding="0" cellspacing="0" width="100%">
                  <tr>
                     <td width="260" valign="top">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                           <tr>
                              <td>
                                 <h4>Dear {{ $params1 }}!</h4>
                                 
                                 </p>
                                 <p>I wanted to remember regarding your package price of <u>INR. {{ $params2 }}</u>
                                 </p>
                                
                                 	 
                                 </p>
                                 <p>The email you used in order to register is: sathishkumar_arumugham@outlook.com</p>
                                
                                 <p>
                                    If you have any questions or just want to chat, feel free to answer this email. We are looking forward to an exciting program ahead!
                                 </p>
                                 <p>
                                    Best regards,<br>
                                    Sathish kumar.
                                 </p>
                              </td>
                           </tr>
                        </table>
                     </td>
                  </tr>
               </table>
            </td>
         </tr>
         <tr>
            <td bgcolor="#ee4c50" style="padding: 10px; color:white;">
               <center><h4>&copy; copyright sathish.</h4></center>
               
            </td>
         </tr>
      </table>
   </body>
</html>