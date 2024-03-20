const { createApp } = Vue;

createApp({

    data(){
        return {
            disclist: []
        }
    },

    mounted() {
        
        axios.get('./server.php').then(res => {
            this.disclist = res.data
        });

    },

}).mount('#app');