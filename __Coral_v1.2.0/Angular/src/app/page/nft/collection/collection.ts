import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { NftNavlight } from "../../../components/navbar/nft-navlight/nft-navlight";
import { nftData } from '../../../../data/data';
import { Footer } from "../../../components/footer/footer";

interface NftData{
  id: number;
  image: string;
  client: string;
  name: string;
  value: string;
  item: string;
  tag: string;
}

@Component({
  selector: 'app-collection',
  imports: [
    CommonModule,
    RouterLink,
    NftNavlight,
    Footer
],
  templateUrl: './collection.html',
  styleUrl: './collection.scss'
})
export class Collection {
  nftData:NftData[] = nftData
}
