new Vue({
    el: '#appProfile',
    data: {
        disabled: true,
        reWriteName: '',
        name: ''
    },
    methods: {
        checkName(){
            this.disabled = this.name != this.reWriteName;
        }
    },
    created(){
        this.name = $("#name").val()
        this.checkName();
    }
})