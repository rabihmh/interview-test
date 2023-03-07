<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Interview Questions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css"
          integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
<div class="container">
    <h1 class="my-4">Interview Questions</h1>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                    What is a REST API?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                 data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    A REST API is a type of web service that allows communication between different systems over the
                    HTTP protocol. REST stands for Representational State Transfer, and it uses HTTP methods like GET,
                    POST, PUT, and DELETE to interact with resources on a server. REST APIs are widely used in modern
                    web development and are known for their simplicity, scalability, and flexibility.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    What would you do if you got stuck on a problem?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                 data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    If I got stuck on a problem, I would first try to break it down into smaller parts and identify
                    where exactly I am stuck. I would then try to find solutions by researching online or consulting
                    with my colleagues or mentors. If I still couldn't find a solution, I would take a break and come
                    back to the problem with a fresh perspective. If the problem is particularly challenging, I may seek
                    help from outside experts or escalate it to my supervisor or team lead.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                    What you will Do if your late in some work ?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                 data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    If I were late for work, I would take the following steps:
                    <ul>
                        <li>Notify my supervisor: As soon as I realize that I will be late for work, I would notify my
                            supervisor or team lead and explain the situation.
                        </li>
                        <li>Prioritize urgent tasks: When I arrive at work, I would prioritize any urgent tasks that
                            need to be completed and work on them first.
                        </li>
                        <li>Make up for lost time: To make up for the time I missed, I would work efficiently and try to
                            complete any missed tasks as soon as possible.
                        </li>
                        <li>Communicate with colleagues: I would communicate with my colleagues to ensure that they are
                            aware of any delays or changes to the timeline and adjust expectations accordingly.
                        </li>
                        <li>Take steps to prevent future lateness: I would identify any factors that contributed to my
                            lateness and take steps to prevent it from happening in the future. This may involve setting
                            an earlier alarm, planning my route to work more carefully, or other adjustments to my
                            routine.
                        </li>
                        <p>Overall, being late for work can be stressful, but it's important to take responsibility and
                            make a plan to catch up on missed work and prevent it from happening again in the
                            future.</p>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@include('includes.scripts')
</html>
