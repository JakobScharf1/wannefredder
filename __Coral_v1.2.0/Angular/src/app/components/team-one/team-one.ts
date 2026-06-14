import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { teamData } from '../../../data/data';

interface Team{
  image: string;
  name: string;
  position: string;
  social: string[];
}

@Component({
  selector: 'app-team-one',
  imports: [
    CommonModule,
    RouterLink
  ],
  templateUrl: './team-one.html',
  styleUrl: './team-one.scss'
})
export class TeamOne {
  teamData:Team[] = teamData.slice(0,4)
}
