window.addEventListener("load", function() {
    const myQuestions = [{
            question: " What is 'le petit déjeuner'?",
            answers: {
                a: "breakfast",
                b: "dinner",
                c: "lunch"
            },
            correctAnswer: "a"
        },
        {
            question: "How would you greet someone in French?",
            answers: {
                a: "Au revoir.",
                b: "Bonjour!",
                c: "Je suis malade."
            },
            correctAnswer: "b"
        },
        {
            question: "What are you asking if you say, 'Parlez-vous anglais?'",
            answers: {
                a: "I can't speak English.",
                b: "where is the nearest bar?",
                c: "Do you speak English?",
            },
            correctAnswer: "c"
        }
    ];

    function buildQuiz() {
        // we'll need a place to store the HTML output
        const output = [];

        // for each question...
        myQuestions.forEach((currentQuestion, questionNumber) => {
            // we'll want to store the list of answer choices
            const answers = [];

            // and for each available answer...
            for (letter in currentQuestion.answers) {
                // ...add an HTML radio button
                answers.push(
                    `<label>
             <input type="radio" name="question${questionNumber}" value="${letter}">
              ${letter} :
              ${currentQuestion.answers[letter]}
           </label>`
                );
            }

            // add this question and its answers to the output
            output.push(
                `<div class="slide">
           <div class="question"> ${currentQuestion.question} </div>
           <div class="answers"> ${answers.join("")} </div>
         </div>`
            );
        });
        // finally combine our output list into one string of HTML and put it on the page
        quizContainer.innerHTML = output.join(" ");
    }

    function showResults() {
        // gather answer containers from our quiz
        const answerContainers = quizContainer.querySelectorAll(".answers");

        // keep track of user's answers
        let numCorrect = 0;
        // for each question...
        myQuestions.forEach((currentQuestion, questionNumber) => {
            // find selected answer
            const answerContainer = answerContainers[questionNumber];
            const selector = `input[name=question${questionNumber}]:checked`;
            const userAnswer = (answerContainer.querySelector(selector) || {}).value;

            // if answer is correct
            if (userAnswer === currentQuestion.correctAnswer) {
                // add to the number of correct answers
                numCorrect++;
                // color the answers green
                answerContainers[questionNumber].style.color = "lightgreen";
            } else {
                // if answer is wrong or blank
                // color the answers red
                answerContainers[questionNumber].style.color = "red";
            }
        });
        var result = sessionStorage.getItem('highscore');
        if (result !== null) {
            if (numCorrect > result) {
                sessionStorage.setItem('highscore', numCorrect);
            }
        } else{
            result = numCorrect;
            sessionStorage.setItem('highscore', numCorrect);
        }

        console.log(result);
        bestScore.innerHTML = `The best score is: ${result} out of ${myQuestions.length}`;
        // show number of correct answers out of total
        resultsContainer.innerHTML = `${numCorrect} out of ${myQuestions.length}`;

    }

    function showSlide(n) {
        slides[CurrentSlide].classList.remove("active-slide");
        slides[n].classList.add("active-slide");
        CurrentSlide = n;

        if (CurrentSlide === 0) {
            previousButton.style.display = "none";
        } else {
            previousButton.style.display = "inline-block";
        }

        if (CurrentSlide === slides.length - 1) {
            nextButton.style.display = "none";
            submitButton.style.display = "inline-block";
        } else {
            nextButton.style.display = "inline-block";
            submitButton.style.display = "none";
        }
    }

    function showNextSlide() {
        showSlide(CurrentSlide + 1);
    }

    function showPreviousSlide() {
        showSlide(CurrentSlide - 1);
    }
    const bestScore = document.getElementById("bestScore");
    const allbest = document.getElementById("allTimebest");
    const quizContainer = document.getElementById("quiz");
    const resultsContainer = document.getElementById("results");
    const submitButton = document.getElementById("submit");

    // display quiz right away
    buildQuiz();

    const previousButton = document.getElementById("previous");
    const nextButton = document.getElementById("next");
    const slides = document.querySelectorAll(".slide");
    let CurrentSlide = 0;

    showSlide(0);

    // on submit, show results
    submitButton.addEventListener("click", showResults);
    previousButton.addEventListener("click", showPreviousSlide);
    nextButton.addEventListener("click", showNextSlide);
});