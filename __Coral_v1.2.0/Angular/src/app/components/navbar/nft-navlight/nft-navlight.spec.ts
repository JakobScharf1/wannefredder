import { ComponentFixture, TestBed } from '@angular/core/testing';

import { NftNavlight } from './nft-navlight';

describe('NftNavlight', () => {
  let component: NftNavlight;
  let fixture: ComponentFixture<NftNavlight>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [NftNavlight]
    })
    .compileComponents();

    fixture = TestBed.createComponent(NftNavlight);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
