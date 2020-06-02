<main>
    <h1>New celebrity</h1>

    <form id="new-celeb-form" action="">

        <fieldset>
            <legend>Clebrity general info</legend>
            <div class="input-group">
                <label>Clebrity Name</label>
                <input type="text" name="celebrity_name" value="" required="required">
                <!-- Ovde teba da se stavi obicno tekstualno polje pod nazivom "celebrity_name" koje je obavezno!!! -->
            </div>

            <div class="input-group">
                <label>Date of birth</label>
                <input type="text" name="celebrity_date_of_birth" value="" required="required">
                <!-- Ovde teba da se stavi obicno tekstualno polje pod nazivom "celebrty_date_of_birth" koje je obavezno!!! -->
            </div>

            <div class="input-group">
                <label>Date of death</label>
                <input type="date" name="celebrty_date_of_death" value="">
                <!-- Ovde teba da se stavi tekstualno polje  za unos datuma pod nazivom "celebrty_date_of_death" koje nije obavezno!!!
                     STETA SAMO STO U FIREFOX-U NIJE PODRZAN OVAJ TYPE DOK U CHROME-U IZGLEDA SUPER.-->
            </div>

            <div class="input-group">
                <label>Photo Url</label>
                <input type="url" name="celebrity_photo_url" value="">
                <!-- Ovde teba da se stavi tekstualno polje za unos url-a pod nazivom "celebrty_photo_url" koje nije obavezno!!! -->
            </div>
        </fieldset>

        <fieldset>
            <legend>Celebrity resume</legend>

            <textarea name="celebrity_resume" cols="50" rows="10" required="required"></textarea>
            <!-- Ovde teba da se stavi tekstualno polje veceg teksta u vise linija pod nazivom "celebrity_resume" koje je obavezno!!! -->
        </fieldset>

        <fieldset>
            <legend>Celebrity quote</legend>

            <textarea name="celebrity_quote" cols="50" rows="2" required="required"></textarea>
            <!-- Ovde teba da se stavi tekstualno polje veceg teksta u vise linija pod nazivom "celebrity_quote" koje je obavezno!!! -->
        </fieldset>

        <fieldset>
            <legend>Celebrity settings</legend>
            <div class="input-group">
                <label>Category</label>

                <select name="celebrity_category">
                    <option value="singer">Singer</option>
                    <option value="businessman">Businessman</option>
                    <option value="politician">Politician</option>
                    <option value="actor" selected>Actor</option>
                </select>
            </div>
            <div class="input-group">
                <label>Status</label>
                <div class="inline-options">

                    <input type="radio" name="celebrity_status" value="active" id="act" checked> <label for="act">Active</label>
                    <input type="radio" name="celebrity_status" value="disabled" id="dis"> <label for="dis">Disabled</label>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-footer">
            <button type="reset">Clear</button>
            <button type="submit">Save Celebrity</button>
        </fieldset>

    </form>

</main>
