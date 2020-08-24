<style>
    :root {
        --main-color:#1F2318;
        --journal-color:#C4C4C4;
        --page-color: #d3585c;
        
    }
    
    
    body {
        background-color: var(--main-color);
        font-family:'Gayathri', sans-serif;
        margin: 0;
        
    }

    .header {
        width: 100%;
        text-align: center;
        background-color: var(--page-color);
        font-size: 1.2em;
    }

    h1 {
        padding-top: 1%;
    }

    .journal {
        font-size: 1.2em;
    }
    
    .button {
        width: 10%;
        background-color: var(--journal-color);
        margin-left: 20px;
        padding: 10px;
        justify-content: center;
        text-align: center;
    }

    .button button {
        margin: 5px;
        height: 100%;
        padding: 10px;
    }
    
    
    button:hover {
        opacity: 1;
    }

    button {
        border:none;
        border-radius: 10px 0 10px 0;
        background-color: var(--page-color);
        font-size: 1em;
        font-weight: bold;
        opacity: 0.8;
        
    }

    .content {
        position: absolute;
        top: 110px;
        left: 16%;
        width: 75%;
        margin: 10px;
        background-color: var(--journal-color);
        padding-left: 10px; 
        font-size: 1em;
    }

   div #date {
        width: 110px;
        background-color: var(--page-color);
        color: black;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        padding: 10px 10px 8px 10px;
        border-radius: 10px;
        margin: 80px 20px 20px 20px;
    }


</style>

