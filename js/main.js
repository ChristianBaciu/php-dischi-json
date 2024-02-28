const {createApp} = Vue

createApp({
    data(){
        return{
            prova: 'ciao',
            apiUrl: 'server.php',
            list: [ ],
        }
    },
    methods:{
        readList(){
            axios.get(this.apiUrl).then((response) =>{
                this.list = response.data
            })
        }
    }
}).mount('#app');

// console.log('prova');