import Vue from 'vue';
//import VeeValidate from 'vee-validate';
import { Validator, install as VeeValidate } from 'vee-validate/dist/vee-validate.minimal.esm.js';
import { required, email } from 'vee-validate/dist/rules.esm.js';
import veeEn from 'vee-validate/dist/locale/en';
import axios from 'axios';
import VueRecaptcha from 'vue-recaptcha'

// Add the rules you need.
Validator.extend('required', required);
Validator.extend('email', email);
// Merge the messages.
Validator.localize('en', veeEn);

// install the plugin
Vue.use(VeeValidate, axios);

const dict = {
    custom: {
        name: {
            required: 'Please enter a name.'
        },
        email: {
            required: 'Please enter a valid email address.'
        },
        message_text: {
            required: 'Please enter a message.'
        }
      
    }
};


var app = new Vue({
    components: {VueRecaptcha},
    el: '#contact-form',
    data: {
        contactForm: null,
        isLoading: false,
        submitText: 'Send',
        error_message: '',
        success_message: '',
        contact: {
            name: '',
            email: '',
            message_text: '',
            recaptcha_token: ''
        },
    },
    created() {
        this.$validator.localize('en', dict);
    },
    methods: {
        submitForm(event) {
            this.error_message = '';
            this.contactForm = event;
            this.isSubmitting = true;
            this.$refs.recaptcha.execute();
        },
        clearForm() {
            this.contact = {
                name: '',
                email: '',
                message_text: '',
                recaptcha_token: ''
            }
            this.$validator.reset();
        },
        onCaptchaVerified(token) {
            this.resetCaptcha();
            this.$validator.validate().then( result => {
                if (result) {
                    this.contact.recaptcha_token = token;
                    this.loading = true;
                    this.submitText = 'Sending...';
                    axios.post('/contact', this.contact).then( (response) => {
                        this.success_message = response.data['success_message'];
                        this.loading = false;
                        this.submitText = 'Send';
                        this.clearForm();
                    }).catch( (error) => {
                        if (error.response) {
                            this.error_message = error.response.data['message'];
                        }
                        this.loading = false;
                        this.submitText = 'Send';
                    });
                } else {
                    this.error_message = 'Please complete the form below and try again.'
                }
            });
        },
        resetCaptcha() {
            this.$refs.recaptcha.reset()
        }
    }
});