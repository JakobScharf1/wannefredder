import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-yoga-timetable',
  imports: [
    CommonModule,
  ],
  templateUrl: './yoga-timetable.html',
  styleUrl: './yoga-timetable.scss'
})
export class YogaTimetable {
data = [
    {
        image:'assets/images/team/yoga1.jpg',
        time:'8:00AM',
        title:'Dhanurasana',
        name:'- Jack John'
    },
    {
        image:'assets/images/team/yoga2.jpg',
        time:'9:00AM',
        title:'Bhujangasana',
        name:'- Jeremiah Green'
    },
    {
        image:'assets/images/team/yoga3.jpg',
        time:'10:00AM',
        title:'Sirsasana',
        name:'- Christina Vasquez'
    },
    {
        image:'assets/images/team/yoga4.jpg',
        time:'11:00AM',
        title:'Padmasana',
        name:'- Lillian Boldt'
    },
    {
        image:'assets/images/team/yoga1.jpg',
        time:'12:00AM',
        title:'Utthita Parsvakonasana',
        name:'- Jack John'
    },
    {
        image:'assets/images/team/yoga2.jpg',
        time:'1:00PM',
        title:'Natarajasana',
        name:'- Jeremiah Green'
    },
    {
        image:'assets/images/team/yoga3.jpg',
        time:'2:00PM',
        title:'Halasana',
        name:'- Christina Vasquez'
    },
    {
        image:'assets/images/team/yoga4.jpg',
        time:'3:00PM',
        title:'Vajrasana',
        name:'- Lillian Boldt'
    },
]
}
