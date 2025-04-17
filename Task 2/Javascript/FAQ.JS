document.querySelectorAll(".faq-question").forEach(h2 =>{
    h2.addEventListener('click', () => {
        const answer = h2.nextElementSibling;

        //Toggle between classes for styling
        h2.classList.toggle('active');

        //Toggle Visibility
        if (answer.style.maxHeight){
            answer.style.maxHeight = null;
        } else{
            answer.style.maxHeight = answer.scrollHeight + "px";
        }
    });
});