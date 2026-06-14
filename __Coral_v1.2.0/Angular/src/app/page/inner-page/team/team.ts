import { Component } from '@angular/core';
import { Navdark } from "../../../components/navbar/navdark/navdark";
import { CommonModule } from '@angular/common';
import { RouterLink } from '@angular/router';
import { teamData } from '../../../../data/data';
import { Footer } from "../../../components/footer/footer";

interface TeamData{
  image: string;
  name: string;
  position: string;
  social: string[];
}

@Component({
  selector: 'app-team',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    Footer
],
  templateUrl: './team.html',
  styleUrl: './team.scss'
})

export class Team {
  teamData:TeamData[] = teamData
}
