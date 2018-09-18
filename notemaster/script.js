 var app = new Vue({
        el: '#app',
        data: {
            title: 'NoteMaster',
            note: {
                title: '',
                text: ''
            },
            notes: [{
                title: 'hi',
                text: 'how are yous',
                date: new Date(Date.now()).toLocaleString()
            }]
        },
        methods: {
            addNote() {
                let { title, text } = this.note
                this.notes.push({
                    title,
                    text,
                    date: new Date(Date.now()).toLocaleString()
                })
            },
            removeNote(index){
            	this.notes.splice(index, 1)
            }
        }
    });