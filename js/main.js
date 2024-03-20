const { createApp } = Vue;

createApp({

    data(){
        return {
            discList: [],
            singleDisc: [],
            showPopup: false
        }
    },

    methods: {
        openPopup(activeindex) {
            this.showPopup = true;
     
            axios.get('./server.php').then(res => {
                this.singleDisc = res.data[activeindex]

            }).catch(err => {
            console.log(err)
            })
        },
        closePopup() {
            this.showPopup = false;
        }
    },

    mounted() {
        
        axios.get('./server.php').then(res => {
            this.discList = res.data
        });

    },

}).mount('#app');