import {Component} from '@angular/core';
import {Hero} from './hero';




@Component({
    selector: 'app-root',
    templateUrl: './app.component.html',
    styleUrls: ['./app.component.css']

})
export class AppComponent {
    title = 'My Tour of Heroes!';
    selectedHero: Hero;
    public heroes = HEROES;
    onSelect(hero:Hero){
        this.selectedHero = hero;
    }
}

const HEROES: Hero[] = [

    {'id': 11, 'name': 'Windstorm'},
    {'id': 12, 'name': 'Necro'},
    {'id': 13, 'name': 'Gipsy'},
    {'id': 14, 'name': 'Pukanidze'},
    {'id': 15, 'name': 'Vodnik'},
    {'id': 16, 'name': 'Magneta'},
    {'id': 17, 'name': 'RubberMan'},
    {'id': 18, 'name': 'Psyhodel'},
    {'id': 19, 'name': 'Tinker'},
    {'id': 20, 'name': 'Tornado Puk'}
];

