<div class="wrap">

    <h1><?php esc_html_e( 'New Reservation', 'bookify' ); ?></h1>
    <br>
    <div class="border-with-text">

        <div class="border-with-text">

            <div class="border-with-text">


                <form action="">
                    <fieldset class="new-fieldset">

                        <legend><?php esc_html_e( 'Seller', 'bookify' ); ?></legend>

                        <label for="servicename"><?php esc_html_e( 'Service name', 'bookify' ); ?></label>
                        <input type="text" id="servicename">

                        <br><br>

                        <label for="hostname"><?php esc_html_e( 'Host name', 'bookify' ); ?></label>
                        <select name="seller" id="hostname">
                            <option value="select" selected="true"
                                    disabled="disable"><?php esc_html_e( 'Select', 'bookify' ); ?></option>
                            <option value="test"><?php esc_html_e( 'test', 'bookify' ); ?></option>
                        </select>

                    </fieldset>
                    <fieldset class="new-fieldset">

                        <legend><?php esc_html_e( 'Customer', 'bookify' ); ?></legend>

                        <label for="user"><?php esc_html_e( 'User', 'bookify' ); ?></label>
                        <input type="search" id="user">
                        <a class="addnew-button" href="#"><?php esc_html_e( 'Add New', 'bookify' ); ?></a>

                        <br><br>

                        <label for="fullname"><?php esc_html_e( 'Full name', 'bookify' ); ?></label>
                        <input type="text" id="fullname">

                        <br><br>

                        <label for="phonenumber"><?php esc_html_e( 'Phone number', 'bookify' ); ?></label>
                        <input type="number" id="phonenumber">

                    </fieldset>
                    <fieldset class="new-fieldset">
                        <legend><?php esc_html_e( 'Service', 'bookify' ); ?></legend>

                        Nothing

                    </fieldset>
                    <fieldset class="new-fieldset">
                        <legend><?php esc_html_e( 'Details', 'bookify' ); ?></legend>

                        <label for="price"><?php esc_html_e( 'Price', 'bookify' ); ?></label>
                        <input type="number" id="price">

                        <br><br>

                        <label for="date&time"><?php esc_html_e( 'Date & Time', 'bookify' ); ?></label>
                        <input type="date" id="date&time">
                        <input type="time" id="date&time">

                        <br><br>

                        <label for="paided"><?php esc_html_e( 'Was it paided before', 'bookify' ); ?></label>
                        <select name="details" id="paided">
                            <option value="select" selected="true"
                                    disabled="disable"><?php esc_html_e( 'Select', 'bookify' ); ?></option>
                            <option value="yes"><?php esc_html_e( 'Yes', 'bookify' ); ?></option>
                            <option value="no"><?php esc_html_e( 'No', 'bookify' ); ?></option>
                        </select>

                        <br><br>

                        <label for="location"><?php esc_html_e( 'Location', 'bookify' ); ?></label>
                        <input type="text" id="location">

                    </fieldset>

                    </fieldset>
                    <fieldset class="new-fieldset">
                        <legend><?php esc_html_e( 'Service', 'bookify' ); ?></legend>

                        Nothing

                    </fieldset>
                    <fieldset class="new-fieldset">
                        <legend><?php esc_html_e( 'Details', 'bookify' ); ?></legend>

                        <label for="price"><?php esc_html_e( 'Price', 'bookify' ); ?></label>
                        <input type="number" id="price">

                        <br><br>

                        <label for="date&time"><?php esc_html_e( 'Date & Time', 'bookify' ); ?></label>
                        <input type="date" id="date&time">
                        <input type="time" id="date&time">

                        <br><br>

                        <label for="paided"><?php esc_html_e( 'Was it paided before', 'bookify' ); ?></label>
                        <select name="details" id="paided">
                            <option value="select" selected="true"
                                    disabled="disable"><?php esc_html_e( 'Select', 'bookify' ); ?></option>
                            <option value="yes"><?php esc_html_e( 'Yes', 'bookify' ); ?></option>
                            <option value="no"><?php esc_html_e( 'No', 'bookify' ); ?></option>
                        </select>

                        <br><br>

                        <label for="location"><?php esc_html_e( 'Location', 'bookify' ); ?></label>
                        <input type="text" id="location">

                    </fieldset>
                    <input type="submit" name="submit" id="submit" class="button-submit" value="Reserve">
                </form>
            </div>
