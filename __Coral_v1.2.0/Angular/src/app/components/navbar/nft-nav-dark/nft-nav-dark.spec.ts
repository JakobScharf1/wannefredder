import { ComponentFixture, TestBed } from '@angular/core/testing';

import { NftNavDark } from './nft-nav-dark';

describe('NftNavDark', () => {
  let component: NftNavDark;
  let fixture: ComponentFixture<NftNavDark>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [NftNavDark]
    })
    .compileComponents();

    fixture = TestBed.createComponent(NftNavDark);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
