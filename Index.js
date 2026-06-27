const { app, BrowserWindow } = require('electron');
const createWindow = () => {
    const win = new BrowserWindow({
        width: 800,
        height:600,
    });

    //win.loadFile('index.php');
    win.loadURL('http://localhost/Practica_Biblioteca-app/index.php');
};

app.whenReady().then(() => {
    createWindow()
})