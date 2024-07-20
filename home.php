

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reservation</title>
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- calendar -->
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>
        <link href="path_to_fullcalendar/main.css" rel="stylesheet" />
        <script src="path_to_fullcalendar/main.min.js"></script>
        <script src="path_to_fullcalendar/locales-all.min.js"></script> <!-- If you need internationalization -->
        <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css' rel='stylesheet' />
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js'></script>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
    </head>
    <style>
        @font-face {
            font-family: "roboto";
            src: url("assets/Roboto-Regular.ttf");
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: "roboto", sans-serif;
        }

        body {
            background: #F5F5F5;
        }

        .res {
            font-size: 16pt;
        }

        .fc .fc-daygrid-day {
            background-color: #FFF; /* Light background */
        }

        .fc .fc-daygrid-day-number {
            color: darkgreen; /* green text */
        }

        .fc .fc-col-header-cell {
            background-color: darkgrey; /* darkgrey background */
        }

        .avail, .unavail {
            font-size: 18pt;
        }

        .avail {
            color: darkgreen;
        }

        .unavail {
            color: darkred;
        }

        .fc-daygrid-day-number.fc-day-overlimit {
            color: darkred !important;
        }


    </style>
    <body>
        <div class="container p-5">
            <div id="calendar" class="mb-3"></div>
            <div class="avail_unavail d-flex flex-row gap-5 justify-content-center mb-5">
                <h1 class="avail">Available</h1>
                <h1 class="unavail text-danger">Unavailable</h1>
            </div>
            <div class="display_appointments">
                <?php require_once 'display_appointments.php'; ?>
            </div>
        </div>

        <!-- modal -->
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title res">Fill the fields below:</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="submit_appointment.php" method="POST">
                            <div class="full_name mb-3">
                                <label for="full_name" class="form-label"><b>FULL NAME</b></label>
                                <input type="text" name="full_name" id="full_name" class="form-control" style="text-transform: uppercase;" required>
                            </div>

                            <div class="division mb-3">
                                <label for="division" class="form-label"><b>DIVISION</b></label>
                                <input type="text" name="division" id="division" class="form-control" style="text-transform: uppercase;" required>
                            </div>

                            <div class="section mb-3">
                                <label for="section" class="form-label"><b>SECTION</b></label>
                                <input type="text" name="section" id="section" class="form-control" style="text-transform: uppercase;" required>
                            </div>

                            <div class="concern mb-3">
                                <label for="concern" class="form-label"><b>CONCERN</b></label>
                                <select name="concern" id="concern" class="form-select" required>
                                    <option value="Choose concern" selected disabled></option>
                                    <option value="WIFI CONNECTION">WIFI DISCONNECTION</option>
                                    <option value="WINDOWS UPDATE">FOR WINDOWS UPDATE</option>
                                </select>
                            </div>

                            <div class="date mb-3">
                                <label for="date" class="form-label"><b>CHOOSE PREFERED DATE</b></label>
                                <input type="date" name="date" size="60" id="date" class="form-control" style="text-transform: uppercase;" required>
                            </div>

                            <div class="submit mb-3">
                                <input type="submit" value="Submit" name="submit" id="submit" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <!-- script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar')
            const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            events: 'display_appointments.php',
            selectable: true,
            select: function(info) {
                $('#myModal').modal('show');
            }
            });
            calendar.render();
        });


        // date picker
        const picker = document.getElementById('date');
        picker.addEventListener('input', function(e){
            var day = new Date(this.value).getUTCDay();
            if([0, 6].includes(day)){
                e.preventDefault();
                this.value = '';
                alert('Weekends not allowed, please select weekdays.');
            }
        });
    </script>
</html>