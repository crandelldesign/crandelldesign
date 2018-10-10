import Vue from 'vue';
import VeeValidate from 'vee-validate';
import axios from 'axios'

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
    el: '#contact-form',
    data: {
        message: 'Hello Vue!'
    },
    created() {
        this.$validator.localize('en', dict);
    },
    methods: {
        submitForm () {
            this.$validator.validate().then(result => {
                if (result) {
                    console.log(result);
                    let contactForm = document.querySelector('contact-form');
                    let data = new FormData(contactForm);
                    axios.post('/contact', data)
                        .then(function (response) {
                            console.log(response);
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                }
            });
        }
    }
});