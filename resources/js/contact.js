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
        loading: false,
        submitText: 'Send',
        error_message: '',
        success_message: '',
        contact: {
            name: '',
            email: '',
            message_text: ''
        },
    },
    created() {
        this.$validator.localize('en', dict);
    },
    methods: {
        submitForm: function () {
            //console.log(this.loading);
            this.error_message = '';
            //this.wait(7000);
            //console.log(this.loading);
            this.$validator.validate().then(result => {
                if (result) {
                    this.loading = true;
                    this.submitText = 'Sending...';
                    let that = this;
                    let my_name = document.querySelector("input[name='my_name']");
                    let my_time = document.querySelector("input[name='my_time']");
                    this.contact.my_name = my_name.value;
                    this.contact.my_time = my_time.value;
                    axios.post('/contact', this.contact)
                        .then(function (response) {
                            console.log(response);
                            that.success_message = response.data['success_message'];
                            that.loading = false;
                            that.submitText = 'Send';
                            that.clearForm();
                        })
                        .catch(function (error) {
                            console.log(error);
                            if (error.response) {
                                that.error_message = error.response.data['message'];
                            }
                            that.loading = false;
                            that.submitText = 'Send';
                        });
                } else {
                    //this.loading = false;
                }
            });
        },
        clearForm() {
            this.contact = {
                name: '',
                email: '',
                message_text: ''
            }
            this.$validator.reset();
        }
    }
});