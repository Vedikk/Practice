"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var core_1 = require('@angular/core');
var myApp = (function () {
    function myApp() {
    }
    myApp = __decorate([
        core_1.Component({
            selector: 'my-app',
            template: "<label>\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0438\u043C\u044F:</label>\n                 <input [(ngModel)]=\"name\"  placeholder=\"name\">\n                 <h1>\u0414\u043E\u0431\u0440\u043E \u043F\u043E\u0436\u0430\u043B\u043E\u0432\u0430\u0442\u044C {{name}}!</h1>"
        }), 
        __metadata('design:paramtypes', [])
    ], myApp);
    return myApp;
}());
exports.myApp = myApp;
//# sourceMappingURL=my-app.component.js.map