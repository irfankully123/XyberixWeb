<div class="projectForm--box">
    <div class="projectForm">
        <div class="projectForm__wrapper">
            <h2 class="head s-font form-item">
                Speak to an Expert
            </h2>
            <div class="generic--form col-100">
                <form  id="contact-form">
                    <input type="hidden" id="source" name="source" value="https://www.xyberixsolutions.com">
                    <div class="generic--form__wrapper twocol-row">
                        <div class="col-31 form-item">
                            <div class="input-container">
                                <input class="input" id="fullname" name="fullname" type="text" required placeholder=" ">
                                <div class="cut"></div>
                                <label for="fullname" class="placeholder">Full Name*</label>
                            </div>
                        </div>
                        <div class="col-31 form-item">
                            <div class="input-container">
                                <input class="input" id="company" name="company" type="text" required placeholder=" "
                                       id="company">
                                <div class="cut"></div>
                                <label for="company" class="placeholder">Company*</label>
                            </div>
                        </div>
                        <div class="col-31 form-item">
                            <div class="input-container">
                                <input class="input" id="email" name="email" type="email" required placeholder=" ">
                                <div class="cut"></div>
                                <label for="email" class="placeholder">Email*</label>
                            </div>
                        </div>
                        <div class="col-31 form-item">
                            <div class="input-container">
                                <input class="input" id="phone" name="phone" type="text" required
                                       placeholder=" " >
                                <div class="cut"></div>
                                <label for="phone" class="placeholder">Phone*</label>
                            </div>
                        </div>
                        <div class="col-45 form-item">
                            <div class="input-container">
                                <label for="job"></label><select class="input-select" name="interest" required id="job">
                                    <option value="empty" selected disabled>I'm interested in</option>
                                    <option value="Corporate Identity / Branding">Corporate Identity / Branding
                                    </option>
                                    <option value="Company Profile / Brochure / E-Magazine">Company Profile /
                                        Brochure / E-Magazine</option>
                                    <option value="Website Design / CMS / CRM">Website Design / CMS / CRM</option>
                                    <option value="Portal Development / Intranet ">Portal Development / Intranet
                                    </option>
                                    <option value="Digital Marketing / SEO / Social / Paid">Digital Marketing / SEO
                                        / Social / Paid</option>
                                    <option value="Mobile App / AR / VR">Mobile App / AR / VR</option>
                                    <option value="Blockchain / NFT / Web 3.0 "> Blockchain / NFT / Web 3.0
                                    </option>
                                    <option value="Resource Augmentation"> Resource Augmentation</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-100 form-item">
                            <div class="input-container">
                                <label for="budget"></label><select class="input-select" id="budget" name="budget" required>
                                    <option value="empty" selected disabled>Budget</option>
                                    <option value="0 - $100">0 - $100</option>
                                    <option value="$100 - $200">$100 - $200</option>
                                    <option value="$200 - $300">$200 - $300</option>
                                    <option value="$300 - $400">$300 - $400</option>
                                    <option value="$400 - $500">$400 - $500</option>
                                    <option value="$500+">$500+</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-100 form-item">
                            <div class="input-container textArea " style="z-index: 0;">
                                <textarea class="input" id="message" name="message" placeholder=" " required></textarea>
                                <div class="cut"></div>
                                <label for="message" class="placeholder">Message</label>
                            </div>
                        </div>
                        <div class="primary-anchor  form-item">
                            <button class="btn--submit" type="submit">
                                <span> Submit</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <button class="close-btn" id="menu-toggle-close">
            <img class="lazy-img" data-src="{{ asset('assets/close-btn.svg') }}" alt="close-btn" width="27"
                 height="27" src="">
        </button>
    </div>
    <div class="projectForm--box__gradient">
    </div>
</div>

