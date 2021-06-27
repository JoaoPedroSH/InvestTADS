new Vue({
    el:'#container-form-gestao',
    data: {
        ganho: '',
        despesa: '',
        investimento: ''
    },
    methods: {
        calcular(){
            return this.ganho - this.despesa - this.investimento;
        }
    }
})