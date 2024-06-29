<!DOCTYPE html>
<html>
<head>
    <title>Other Options</title>
    <link rel="stylesheet" type="text/css" href="/IWT Assignment II/Other Options/SRC/Styles/styles.css">
</head>
<body>

    <?php
    include 'C:/Users/user/OneDrive/Documents/SLIIT/2nd Semester/Group Projects/IWT Group Project/IWT Group Projects/IWT Assignment II/Header/Header.php';
    ?>
    
    <div class="container">
        <div class="column">
            <h1>Customer Support E-mail</h1>
            <p>When a customer needs assistance or wants to raise a query, they can navigate to the customer support section and locate the "send email" option.</p>
            <p>The email notice description typically includes the following elements:</p>
            <ol type="1">
                <li><b>Subject Line:</b> The subject line should be concise and capture the essence of the customer's issue or query. It helps the support team to quickly identify the purpose of the email.</li>
                <li><b>Description:</b> Customers can provide a detailed description of their issue or question in the body of the email. They should include relevant information such as order numbers, product names, or any other specifics that can assist the support team in understanding the problem.</li>
                <li><b>Attachments:</b> If the customer needs to provide any additional documents or files to support their query, they can attach them to the email. This could include screenshots, images, or relevant documents related to their issue.</li>
                <li><b>Contact Information:</b> The email notice should already contain the customer's email address, but it's essential to confirm this information in case they are using a different email account. Customers may also include their phone number or other contact details if necessary.</li>
                <li><b>Requested Action or Expectations:</b> If the customer has a specific request or expectation regarding the support team's response or resolution, they should clearly state it in the email. For example, they might request a refund, ask for troubleshooting steps, or seek information on a particular topic.</li>
                <li><b>Closing:</b> It's always polite for customers to end their email with a closing, such as "Sincerely" or "Thank you," followed by their name.</li>
            </ol>
            <h1>OR</h1>
            <form action="submit_form.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                
                <button type="submit">Submit</button>
            </form>
        </div>
        <div class="column">
            <h1>Customer Support Ticket</h1>
            <p>Dear Valued Customer,<br><br>
            We are thrilled to introduce our new and improved Online Customer Support System, designed to enhance your experience and provide swift resolutions to your queries and concerns. Our "Raise a Ticket" feature is a user-friendly solution that ensures your issues receive dedicated attention from our support team, offering a streamlined process that maximizes efficiency and effectiveness.</p>
            <p>How does it work?</p>
            <ol type=1>
                <li>Access the "Raise a Ticket" Feature: Visit our website or log in to your account, where you will find the "Raise a Ticket" option prominently displayed. Click on it to initiate the process.</li>
                <li>Provide Essential Details: Fill out a brief form with essential details related to your issue, such as the category of the problem, a concise summary, and any relevant attachments, screenshots, or error messages. The more information you provide, the better equipped our support team will be to assist you promptly.</li>
                <li>Priority Selection: Specify the urgency of your request by selecting the appropriate priority level. We offer various priority options, ranging from low to high, ensuring that critical issues receive immediate attention.</li>
                <li>Submit and Confirmation: Once you have completed the ticket details, simply click the "Submit" button. You will receive an instant confirmation acknowledging the successful submission of your ticket, along with a unique ticket number for reference.</li>
                <li>Expert Assistance: Our dedicated support team will review your ticket and assign it to a knowledgeable representative with expertise in the relevant area. Rest assured, your ticket will be handled with utmost care and professionalism.</li>
                <li>Ticket Tracking: Through our intuitive Customer Support Dashboard, you can conveniently track the progress of your ticket. Receive real-time updates, including the current status and any communication exchanged between you and our support team.</li>
                <li>Timely Resolution: We are committed to resolving your concerns as quickly as possible. Our support team will diligently investigate your issue, offer tailored solutions, and provide regular updates until the matter is successfully resolved. You can also communicate directly with our representatives via the ticketing system for any follow-up questions or additional information.</li>
            </ol>
            <p>At e-Life, we value your satisfaction and strive to exceed your expectations. With our new "Raise a Ticket" feature, you can be confident that your concerns will receive the attention they deserve, ensuring a seamless customer support experience from start to finish.<br><br>
            Thank you for choosing our services. We appreciate your patience and cooperation as we work towards resolving any issues you may encounter.<br><br>
            Best regards,<br><br>
            e-Life Customer Support Team</p>
            <form action="/submit_ticket" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>

                <input type="submit" value="Submit Ticket">
            </form>
        </div>
        <div class="column">
            <h1>Social Media</h1>
            <p>Dear valued customers,</p>
            <p>We are excited to introduce our new and improved online customer support system! We understand the importance of providing you with exceptional service and timely assistance, which is why we have enhanced our support channels to make your experience even better.</p>
            <p>Our online customer support system is designed to offer you quick and efficient solutions to any inquiries or issues you may have. Whether you need assistance with product information, order tracking, billing inquiries, or any other concerns, our dedicated support team is here to help.</p>
            <p>One of the key features of our upgraded system is our integration with social media platforms. We recognize that many of our customers prefer to engage with us through social media channels, and we have made it easier than ever for you to reach out to us and receive prompt responses.</p>
            <p>Through our social media customer support, you can now connect with us on platforms such as Facebook, Twitter, and Instagram. Simply send us a direct message or leave a comment on our posts, and our team will be ready to assist you. We aim to provide personalized and real-time support, ensuring that your questions are answered and your concerns are addressed in a timely manner.</p>
            <p>In addition to social media, we continue to offer multiple channels for customer support. You can reach us through our website's live chat feature, where our agents are available round the clock to assist you. You can also contact us via email or phone, as we understand that different customers have different preferences when it comes to communication.</p>
            <p>At e-Life, we value your feedback and strive to continuously improve our services. Your satisfaction is our top priority, and we are confident that our enhanced online customer support system will exceed your expectations.</p>
            <p>Thank you for choosing e-Life. We look forward to serving you and providing you with exceptional support through our new and improved channels.</p>
            <p>Best regards,</p>
            <p>e-Life</p>
            <div class="social-media-icons">
                <a href="https://www.facebook.com/yourpage" target="_blank">Facebook</a>
                <a href="https://twitter.com/yourpage" target="_blank">Twitter</a>
                <a href="https://www.instagram.com/yourpage" target="_blank">Instegram</a>
                <a href="https://www.linkedin.com/company/yourpage" target="_blank">LinkIn</a>
            </div>
        </div>
    </div>

    <?php
      include 'C:/Users/user/OneDrive/Documents/SLIIT/2nd Semester/Group Projects/IWT Group Project/IWT Group Projects/IWT Assignment II/Footer/Footer.php';
    ?>

</body>
</html>