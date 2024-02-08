const mathRedirect = document.querySelector("#math-course");

mathRedirect.addEventListener("click", (e) => {
    // Encode the phone number and text for WhatsApp URL
    const phoneNumber = '+918830231066';
    const text = 'I am interested in the math course';
    const whatsappUrl = `https://wa.me/${encodeURIComponent(phoneNumber)}?text=${encodeURIComponent(text)}`;

    // Redirect to the WhatsApp URL
    window.location.href = whatsappUrl;

    // Log to the console for debugging
    console.log("Clicked");

    // Prevent the default behavior of the anchor tag
    e.preventDefault();
});