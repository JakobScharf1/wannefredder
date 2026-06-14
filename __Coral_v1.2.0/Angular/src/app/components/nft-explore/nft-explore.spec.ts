import { ComponentFixture, TestBed } from '@angular/core/testing';

import { NftExplore } from './nft-explore';

describe('NftExplore', () => {
  let component: NftExplore;
  let fixture: ComponentFixture<NftExplore>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [NftExplore]
    })
    .compileComponents();

    fixture = TestBed.createComponent(NftExplore);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
